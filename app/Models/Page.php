<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modell für Seiteninhalte.
 * Hält Titel, Content und Meta-Daten je Sprache.
 */
class Page extends Model
{
    protected $fillable = [
        'slug',
        'title_de',
        'title_en',
        'content_de',
        'content_en',
        'meta_title_de',
        'meta_title_en',
        'meta_description_de',
        'meta_description_en',
    ];
}
