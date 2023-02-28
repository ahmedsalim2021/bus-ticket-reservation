<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = Booking::factory()->count(5)->create();

        foreach ($bookings as $booking) {
            $booking->seats()->attach($booking->trip->seats->random(rand(1, 10)));
        }
    }
}
