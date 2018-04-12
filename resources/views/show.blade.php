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
    <a href="{{route('single-ganre', ['ganre' => $movie->ganre])}}">{{$movie->ganre}}</a>
    <hr>
    {{$movie->year}}
    <hr>
    {{$movie->director}}
    <hr>
    <hr>
    <form method="POST" action="{{route('comment-movie', [ 'id' => $movie->id])}}">
      {{csrf_field()}}
      <h3>Dodaj komentar:</h3>
          <div class="form-group">
              <label for="content">Tekst komentara:</label>
              <textarea id="content" name="content" class="form-control"></textarea>
              @include('partials.error-message', ['fieldTitle' => 'content'])
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Dodaj komentar</button>
          </div>
    </form>
    <h2>Komentari:</h2>
    <ul class="list-unstyled">
              @foreach($movie->comments as $comment)
                <li>
                  <p>{{$comment->content}}</p>
                </li>
              @endforeach
            </ul>

@endsection