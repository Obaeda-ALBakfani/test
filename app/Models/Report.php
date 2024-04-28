<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_id',
        'report',
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
