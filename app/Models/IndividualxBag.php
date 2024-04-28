<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualxBag extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'adults_number',
        'kids_number',
        'Bags_number',
    ];
}
