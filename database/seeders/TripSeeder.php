<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Trip::truncate();
        Trip::insert([
            [
                'origin' => 'Cairo',
                'destination' => 'Alexandria',
                'distance'    => '90 KM',
                'trip_distance_type' => 'short trip',
                'price'        => 150,
                'bus_number'   => rand(100, 1000),
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'origin' => 'Cairo',
                'destination' => 'Aswan',
                'distance'    => '150 KM',
                'trip_distance_type' => 'long trip',
                'created_at'   => now(),
                'bus_number'   => rand(100, 1000),
                'price'        => 550,
                'updated_at'   => now(),
            ],
        ]);
    }
}
