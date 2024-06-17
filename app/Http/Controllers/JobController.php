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
        // $jobs = Job::latest()->get();
        $jobs = Job::with('region', 'location', 'job_type', 'user')->latest()->get();

        return view('welcome', [
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

        return view('job.create',[
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
            // 'images' => 'required',
        ]);

        if($request->hasFile('images')){
            $formData['images'] = $request->file('images')->store('uploads', 'public');
        }

        // $formData['user_id'] = auth()->id();
        $formData['user_id'] = 1;

        Job::create($formData);

        return redirect('/')->with('message', 'Job Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        if($job->user_id != auth()->id()){
            abort(403, 'Unauthorized Access');
        }
        
        $job->delete();

        return redirect('/')->with('message', 'Job Deleted Successfully!');
    }
}
