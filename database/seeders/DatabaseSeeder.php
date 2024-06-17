<?php

namespace Database\Seeders;

use App\Models\JobType;
use App\Models\Location;
use App\Models\Region;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        JobType::create([
            'name'=> 'Mason'
        ]);
        JobType::create([
            'name'=> 'Carpenter'
        ]);
        JobType::create([
            'name'=> 'Tailor'
        ]);


        Region::create([
            'name'=> "Greater Accra"
        ]);
        Region::create([
            'name'=> "Kumasi"
        ]);

        Location::create([
            'name'=> "Awoshie"
        ]);
        Location::create([
            'name'=> "Kwashiman"
        ]);
        Location::create([
            'name'=> "Odorkor"
        ]);
    }
}
