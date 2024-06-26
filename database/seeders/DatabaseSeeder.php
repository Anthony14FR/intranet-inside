<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Service::create(['name' => 'Web Development']);

        Service::factory(10)->create();

        User::factory(200)->create()->each(function ($user) {
            $services = Service::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $user->services()->attach($services);
        });
    }
}
