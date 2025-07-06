<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'start_at',
        'end_at',
        'name',
        'email',
        'phone',
        'notes',
        'status',
    ];

    protected $dates = [
        'start_at',
        'end_at',
    ];
}
