@extends('layouts.app')

@section('content')
<div class="container">
    <h1>crea un nuovo personaggio</h1>
    <a class="btn btn-primary" href="{{ route('comics.index') }}">HOME</a>

</div>

<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ??'' }}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
            @error('type')
            {{-- <div class="alert alert-danger">{{ $message }}
        </div> --}}
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
</div>

<div class="mb-3">
    <label for="sale_date" class="form-label">data di vendita</label>
    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
    @error('sale_date')
    {{-- <div class="alert alert-danger">{{ $message }}
</div> --}}
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label for="series" class="form-label">series</label>
    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
    @error('series')
    {{-- <div class="alert alert-danger">{{ $message }}
</div> --}}
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label for="thumb" class="form-label">image</label>
    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
    @error('thumb')
    {{-- <div class="alert alert-danger">{{ $message }}
</div> --}}
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
</div>

<button class="btn btn-success my-4">Salva</button>

</form>
</div>

<!-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->

@endsection