<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $c = Comic::all();

        return view('comics.index', compact('c'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->price = $data['price'];
        $new_comic->type = $data['type'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->series = $data['series'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->description = $data['description'];

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }
}
