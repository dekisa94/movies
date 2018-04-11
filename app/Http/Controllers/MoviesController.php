<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::get();
        return view('index', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('show', compact('movie'));
    }
}
