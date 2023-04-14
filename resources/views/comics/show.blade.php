@extends('layouts.app')

@section('content')

<div class="container">
    <div class="grid">
        <div class="card-comics">
            <figure>
                <img src="{{ $comic->thumb }}" alt="">
            </figure>
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