<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;
use App\Models\Service;

class FavoriteList extends Model
{
    use HasFactory;

    protected $fillable = [
        'Passenger_id',
        'service_id',
    ];

    public function Passenger()
    {
        return $this->BelongsTo(Passenger::class);
    }

    public function Service()
    {
        return $this->belongsTo(Service::class);
    }

}
