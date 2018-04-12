<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GanresController extends Controller
{
    public function show($ganre)
    {
        $movies = Movie::where('ganre',$ganre)->get();
        return view('ganre', compact('movies'));
    }
}
