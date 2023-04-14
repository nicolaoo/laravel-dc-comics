@extends('layouts.app')

@section('content')

<div class="container">

    <!-- <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($c as $comic)
            <tr>
                <th scope="row">1</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> -->

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($c as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection