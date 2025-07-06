<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Zeige die Startseite.
     */
    public function __invoke(): View
    {
        return view('welcome');
    }
}
