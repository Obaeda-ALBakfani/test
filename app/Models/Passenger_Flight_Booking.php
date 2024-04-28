<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger_Flight_Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'Passenger_id',
        'Flight_id',
        'Booking_id',
    ];
}
