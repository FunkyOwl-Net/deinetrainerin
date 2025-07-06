<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Dynamische Textbausteine für mehrsprachige Inhalte.
 */
class Translation extends Model
{
    protected $fillable = [
        'key',     // eindeutiger Name der Textstelle
        'locale',  // de oder en
        'value',   // eigentlicher Text
    ];
}
