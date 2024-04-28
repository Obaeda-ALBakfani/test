<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FavoriteList extends Model
{
    use HasFactory;

    protected $fillable = [
        'Passenger_id',
        'service_id',
    ];

    public function Passenger()
    {
        return $this->BelongsTo(Passenger::Class);
    }

    public function Service()
    {
        return $this->belongsTo(Service::class);
    }

}
