<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // mostra homepage sito
public function index() 
{
    return view('home');
}
}
