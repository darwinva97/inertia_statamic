<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use \Statamic\Facades\Entry;

class ArtistController extends Controller
{
    function index()
    {
        // obtener las entradas de la colección "Artist" de statamic que está en este proyecto incluir las imagenes de "profile_picture"
        $artists = Entry::whereCollection('artist')
            ->where('profile_picture', '!=', null);
        // $artists = Entry::whereCollection('artist');

        // renderiza una vista de inertia con las entradas de la colección
        return Inertia::render('Artists', [
            'artists' => $artists
        ]);
    }
}
