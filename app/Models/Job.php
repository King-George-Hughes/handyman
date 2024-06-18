<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'description',
        'user_id',
        'job_type_id',
        'region_id',
        'location_id',
    ];

    public function scopeFilterBySearch(Builder $query, $search, $jobTypeId = null, $regionId = null, $locationId = null)
    {
        if ($search) {
            $query->where(function (Builder $query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($jobTypeId) {
            $query->where('job_type_id', $jobTypeId);
        }

        if ($regionId) {
            $query->where('region_id', $regionId);
        }

        if ($locationId) {
            $query->where('location_id', $locationId);
        }

        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function job_type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }
}
