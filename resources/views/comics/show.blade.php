@extends('layouts.app')

@section('content')

<style>
    .row {
        flex-wrap: nowrap;
        align-items: end;
        gap: 15px;
    }
</style>

<div class="container">
    <div class="grid">
        <div class="card-comics">
            <div class="row">
                <a class="col-auto my-4 btn btn-primary" href="{{ route('comics.index') }}">HOME</a>
                <figure>
                    <img src="{{ $comic->thumb }}" alt="" height="200">
                </figure>

            </div>
            <ul>
                <li>
                    <h1>{{ $comic->title}}</h1>
                </li>
                <li>{{ $comic->price}} £</li>
                <li>{{ $comic->series}}</li>
                <li>{{ $comic->sale_date}}</li>
                <li>{{ $comic->type}}</li>
                <li>{{ $comic->description}}</li>
            </ul>
        </div>
    </div>

</div>

@endsection