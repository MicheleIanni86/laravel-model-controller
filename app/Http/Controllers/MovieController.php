<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // MOSTRA LIST RISORSA MOVIE
    public function index() 
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    // mostra il dettaglio dei Movie
    public function show(Movie $movie) 
    {
        
        return view('movies.show', compact('movie'));
    }
}
