@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($c as $comic)
    <h1>{{ $comic->title}}</h1>
    @endforeach
</div>
@endsection