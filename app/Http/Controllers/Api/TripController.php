<?php

namespace App\Http\Controllers\Api;

use App\Enum\Seat;
use App\Http\Resources\TripResource;
use App\Models\Booking;
use App\Models\Trip;

class TripController extends ApiController
{
    public function index()
    {
        $trips = Trip::all();

        return $this->apiResponse(TripResource::collection($trips), 'List Trips');
    }

    public function availableSeats()
    {
        $todaySeatsNumbersBookings = Booking::select('seats_numbers')
            ->whereDate('created_at', today())->get();

        //convert list of arrays of booked seats in every booking in one array
        $bookedSeatsToday = call_user_func_array('array_merge',
            $todaySeatsNumbersBookings
                ->pluck('seats_numbers')->toArray());

        //extract available seats from difference between booked seats and all seats
        $availableSeats = array_values(array_diff(Seat::numbers(), $bookedSeatsToday));

        return $this->apiResponse($availableSeats,'List Available Seats to book today');
    }
}
