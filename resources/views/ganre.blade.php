@extends('master')

@section('title')
Ganre
@endsection

@section('content')
<br><br><br><br>
    <ul>
        @foreach($movies as $movie)
        <li>
        <a href="{{route('single-movie', ['id'=>$movie->id])}}">{{$movie->title}}</a>
        {{$movie->storyline}}
        </li>
        @endforeach
    </ul>
@endsection
