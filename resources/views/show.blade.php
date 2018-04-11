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
@endsection