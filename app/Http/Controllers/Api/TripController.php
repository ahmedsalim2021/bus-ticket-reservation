<?php

namespace App\Http\Controllers\Api;

use App\Models\Trip;

class TripController extends ApiController
{
    public function index()
    {
        $trips = Trip::all();

        return $this->apiResponse($trips, 'List Trips');
    }
}
