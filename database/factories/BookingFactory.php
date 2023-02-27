<?php

namespace Database\Factories;

use App\Enum\Seat;
use App\Models\Trip;
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
        $numberOfSeats = fake()->numberBetween(1, 10);
        $allSeatsNumbers = Seat::numbers();
        shuffle($allSeatsNumbers);

        return [
            'email' => fake()->email,
            'number_of_seats' => $numberOfSeats,
            'trip_id' => Trip::all()->random()->id,
            'seats_numbers' => array_slice($allSeatsNumbers, 0, $numberOfSeats),
        ];
    }
}
