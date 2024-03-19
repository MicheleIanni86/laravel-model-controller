<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    // mostra homepage sito
public function index() 
{
    $movies = Movie::all();
    dd($movies);
    return view('home');
}
}
