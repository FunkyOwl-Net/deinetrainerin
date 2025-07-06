<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Basis-Benutzermodell für Administratoren und ggf. weitere Nutzer.
 * Enthält nur die wichtigsten Felder.
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * Mass-assignable Attribute.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // true = Backend-Admin
    ];

    /**
     * Felder, die bei Serialisierung verborgen werden sollen.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
