<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Movie;

class CommentsController extends Controller
{
    public function store($id)
    {
        $movie = Movie::find($id);
        $this->validate(request(), ['content' => 'required|max:200']);
        $movie->comments()->create(request()->all());
        return redirect()->back();
    }
}
