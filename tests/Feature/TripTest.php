<?php

namespace Tests\Feature;

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
}
