@extends('master')

@section('title')
Movies
@endsection

@section('content')
    <br><br><br>
    {{$movie->title}}
    <hr>
    {{$movie->storyline}}
    <hr>
    {{$movie->year}}
    <hr>
    {{$movie->director}}
    <hr>
    <hr>
    <h2>Komentari:</h2>
    <ul class="list-unstyled">
              @foreach($movie->comments as $comment)
                <li>
                  <p>{{$comment->content}}</p>
                </li>
              @endforeach
            </ul>

@endsection