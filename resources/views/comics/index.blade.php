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
    <div class="row py-5">
        <div class="col-auto">

            <a href="{{ route('comics.create') }}" class="btn btn-primary mx-auto">NUOVO EROE</a>
        </div>
    </div>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Img</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Modifica</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($c as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>
                    <img src="{{ $comic->thumb}}" alt="" height="80">
                </td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">
                        EDIT
                    </a>
                </td>
                <td>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="delete-btn btn btn-danger" type="submit" value="DELETE">
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<style>
    .delete-btn {
        width: 80px;
    }
</style>
@endsection