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
        $movie = Movie::with('comments')->find($id);
        return view('show', compact('movie'));
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        $this->validate(request(), ['title'=>'required', 'ganre'=>'required', 'year' => 'required|integer|between:1900,2018', 'storyline' => 'required|max:1000']);
        Movie:: create(request()->all());
        return redirect('/movies');
    }
}
