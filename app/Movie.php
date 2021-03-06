<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'ganre','director', 'year', 'storyline'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
