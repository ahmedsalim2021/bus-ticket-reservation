<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'email','number_of_seats','trip_id','seats_numbers'
    ];

    public function trip()
    {
        $this->belongsTo(Trip::class);
    }
}
