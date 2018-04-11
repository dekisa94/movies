@extends('master')

@section('title')
Movies
@endsection

@section('content')
    <ul>
        @foreach($movies as $movie)
        <li>
        <a href="{{route('single-movie', ['id'=>$movie->id])}}">{{$movie->title}}</a>
        {{$movie->storyline}}
        </li>
        @endforeach
    </ul>
@endsection
