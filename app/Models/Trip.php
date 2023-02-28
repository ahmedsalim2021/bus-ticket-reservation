<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'origin', 'destination', 'distance', 'trip_distance_type',
    ];

    public function seats()
    {
        return $this->hasMany(Seat::class, 'bus_number', 'bus_number');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
