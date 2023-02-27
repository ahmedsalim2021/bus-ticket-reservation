<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pick_up' => $this->origin,
            'destination' => $this->destination,
            'distance' => $this->distance,
            'trip_type' => $this->trip_distance_type,
            'price' => $this->price,
        ];
    }
}
