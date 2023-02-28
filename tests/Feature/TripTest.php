<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Trip;
use Tests\TestCase;

class TripTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_trips_with_success_response()
    {
        $response = $this->get('/api/trips');

        $response->assertStatus(200);
    }

    public function test_list_available_seats()
    {
        $trip = Trip::all()->random();

        $response = $this->get('/api/trips/available-seats?bus_number=' . $trip->bus_number);

        $response->assertStatus(200);
    }

    public function test_no_available_seats()
    {
        $trip = Trip::all()->random();
        $bookings = Booking::factory()->count(100)->create();
        foreach ($bookings as $booking) {
            $booking->seats()->attach($booking->trip->seats->random(rand(1, 10)));
        }
        $response = $this->get('/api/trips/available-seats?bus_number=' . $trip->bus_number);

        $response->assertStatus(206);
    }

    public function test_only_one_user_can_check_available_seats_the_same_time()
    {
        $trip = Trip::all()->random();

        $response = $this->get('/api/trips/available-seats?bus_number=' . $trip->bus_number);

        $response->assertStatus(200);

        $response = $this->get('/api/trips/available-seats?bus_number=' . $trip->bus_number);

        $response->assertStatus(203);
    }
}
