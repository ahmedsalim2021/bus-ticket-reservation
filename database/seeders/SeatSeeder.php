<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Seat::truncate();

        $trips = Trip::all();

        foreach ($trips as $trip) {
            for ($a = 1; $a <= 10; $a++) {
                Seat::create([
                    'bus_number' => $trip->bus_number,
                    'seat_number' => 'A' . $a,
                ]);
            }
            for ($b = 1; $b <= 10; $b++) {
                Seat::create([
                    'bus_number' => $trip->bus_number,
                    'seat_number' => 'B' . $b,
                ]);
            }
        }
    }
}
