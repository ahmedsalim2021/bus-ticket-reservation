<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'bus_number', 'bus_number');
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class)
            ->withPivot('created_at');
    }
}
