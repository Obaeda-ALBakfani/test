<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePassenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'Passenger_id',
        'service_provider_id',
    ];
}
