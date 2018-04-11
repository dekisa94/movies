@extends('master')

@section('title')
Add movie
@endsection

@section('content')


<form method="POST" action="">
{{csrf_field()}}
<h1>Add new movie</h1>
    <div class="form-group">
        <label for="title">Ime filma</label>
        <input id="title" type="text" name="title" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'title'])
    </div>
    <div class="form-group">
        <label for="ganre">Zanr</label>
        <input id="ganre" type="text" name="ganre" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'ganre'])
    </div>
    <div class="form-group">
        <label for="director">Reziser</label>
        <input id="director" type="text" name="director" class="form-control">
    </div>
    <div class="form-group">
        <label for="year">Godina</label>
        <input id="year" type="number" name="year" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'year'])
    </div>
    <div class="form-group">
        <label for="storyline">Zaplet</label>
        <textarea id="storyline" name="storyline" class="form-control"></textarea>
        @include('partials.error-message', ['fieldTitle' => 'storyline'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </div>
</form>


@endsection