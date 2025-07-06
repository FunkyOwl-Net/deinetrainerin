<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Repräsentiert eine Terminbuchung eines Nutzers.
 */
class Appointment extends Model
{
    protected $fillable = [
        'user_id', // Bezug zum eintragenden Admin
        'start_at', // Beginn des Termins
        'end_at',   // optionales Ende
        'name',     // Name des Kunden
        'email',
        'phone',
        'notes',
        'status',   // requested|confirmed|canceled
    ];

    protected $dates = [
        'start_at',
        'end_at',
    ];
}
