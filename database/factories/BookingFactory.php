<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'booking_reference' => fake()->randomNumber(5),
            'number_of_seats' => fake()->randomNumber(1) == 0 ? 1 : fake()->randomNumber(1),
            'trip_id' => Trip::all()->random()->id,
            'user_id' => User::factory()->create()->id,
        ];
    }
}
