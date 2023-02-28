<?php

namespace Tests\Feature;

use App\Enum\Seat;
use App\Models\Booking;
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
        $response = $this->get('/api/trips/available-seats');

        $response->assertStatus(200);
    }

    public function test_no_available_seats()
    {
        Booking::factory()->count(100)->create();
        $response = $this->get('/api/trips/available-seats');

        $response->assertStatus(206);
    }
}
