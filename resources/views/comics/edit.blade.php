@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Modifica il personaggio:
        {{ $comic->title }}
    </h1>

</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('comics.index') }}">HOME</a>
</div>
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">
            {{ $comic->description }}
            </textarea>
        </div>

        <button class="btn btn-success my-4">Salva</button>

    </form>
</div>

@endsection