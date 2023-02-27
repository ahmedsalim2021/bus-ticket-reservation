<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TripResource;
use App\Models\Trip;

class TripController extends ApiController
{
    public function index()
    {
        $trips = Trip::all();

        return $this->apiResponse(TripResource::collection($trips), 'List Trips');
    }
}
