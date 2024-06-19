<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobType;
use App\Models\Location;
use App\Models\Region;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request()->get('search');
        $jobTypeId = request()->get('job_type_id');
        $regionId = request()->get('region_id');
        $locationId = request()->get('location_id');
        // $jobs = Job::with('region', 'location', 'job_type', 'user')->latest()->paginate(6);

        $jobs = Job::query()->with('region', 'location', 'job_type', 'user')->filterBySearch($search, $jobTypeId, $regionId, $locationId)->latest()->paginate(6);

        $job_types = JobType::all();
        $regions = Region::all();
        $locations = Location::all();

        return view('welcome', [
            'jobs' => $jobs,
            'job_types' => $job_types,
            'regions' => $regions,
            'locations' => $locations,
        ]);
    }

    public function dashboard()
    {
        $jobs = Job::where('user_id', auth()->id())->latest()->get();

        return view('dashboard', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $job_types = JobType::all();
        $regions = Region::all();
        $locations = Location::all();

        return view('job.create', [
            'job_types' => $job_types,
            'regions' => $regions,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required | min:3',
            'description' => 'required | min:3',
            'job_type_id' => ['required'],
            'region_id' => ['required'],
            'location_id' => ['required'],
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $storedFiles = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $storedFiles[] = $path;
            }
        }

        $storedFiles = implode(',', $storedFiles);
        $formData['images'] = $storedFiles;

        $formData['user_id'] = auth()->id();
        // $formData['user_id'] = 1;

        Job::create($formData);

        return redirect('/')->with('message', 'Job Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', [
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $job_types = JobType::all();
        $regions = Region::all();
        $locations = Location::all();

        if ($job->user_id != auth()->id()) {
            // abort(403, 'Unauthorized Access');
            return back()->with('message', "Unauthorized access");
        }

        return view('job.edit', [
            'job' => $job,
            'job_types' => $job_types,
            'regions' => $regions,
            'locations' => $locations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        if ($job->user_id != auth()->id()) {
            // abort(403, 'Unauthorized Access');
            return back()->with('message', "Unauthorized access");
        }

        $formData = $request->validate([
            'title' => 'required | min:3',
            'description' => 'required | min:3',
            'job_type_id' => ['required'],
            'region_id' => ['required'],
            'location_id' => ['required'],
        ]);

        $storedFiles = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $storedFiles[] = $path;
            }

            $storedFiles = implode(',', $storedFiles);
            $formData['images'] = $storedFiles;
        }

        $job->update($formData);

        return redirect('/')->with('message', 'Job Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        if ($job->user_id != auth()->id()) {
            // abort(403, 'Unauthorized Access');
            return back()->with('message', "Unauthorized access");
        }

        $job->delete();

        return redirect('/')->with('message', 'Job Deleted Successfully!');
    }
}
