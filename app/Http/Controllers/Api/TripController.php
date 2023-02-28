<?php

namespace App\Http\Controllers\Api;

use App\Helpers\HttpHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AvailableSeatRequest;
use App\Http\Resources\TripResource;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Support\Facades\Cache;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();

        return HttpHelper::apiResponse(TripResource::collection($trips), 'List Trips');
    }

    public function availableSeats(AvailableSeatRequest $request)
    {
        $trip = Trip::where('bus_number', $request->bus_number)->first();

        if (Cache::get($request->bus_number) != null) {
            return HttpHelper::apiResponse([], 'You cannot book ticket now, please retry after 2 minutes', [], 203);
        }

        $todayBookings = $trip->bookings()->whereDate('created_at', today())->get();
        $todayBookedSeatsIds = $todayBookings->map->seats->flatten()->map->id->flatten();

        $availableSeats = Seat::where('bus_number', $request->bus_number)->
        whereNotIn('id', $todayBookedSeatsIds)->get();

        if ($availableSeats->isEmpty()) {
            Cache::forget($request->bus_number);

            return HttpHelper::apiResponse($availableSeats, 'No Seats Available', [], 206);
        }

        Cache::put($request->bus_number, $trip, 120);

        return HttpHelper::apiResponse($availableSeats, 'List Available Seats to book today');
    }
}
