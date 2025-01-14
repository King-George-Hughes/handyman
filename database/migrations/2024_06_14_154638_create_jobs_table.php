<?php

use App\Models\JobType;
use App\Models\Location;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('images')->nullable();
            $table->text('description')->nullable();
            $table->foreignIdFor(User::class)->index()->nullable();
            $table->foreignIdFor(JobType::class)->index()->nullable();
            $table->foreignIdFor(Region::class)->index()->nullable();
            $table->foreignIdFor(Location::class)->index()->nullable();
            $table->timestamps();
        });

        Schema::create('job_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('jobtypes');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('locations');
    }
};
