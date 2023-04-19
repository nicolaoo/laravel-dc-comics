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

        // $data = $request->all();

        $data = $request->validate()([
            'title' => 'required|max:255|min:3',
            'description' => 'nullable|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required|max:30|min:1|numeric|',
            'series' => 'required|max:100|min:3',
            'sale_date' => 'required|date',
            'type' => 'required|max:50|min:3',
        ]);

        // $new_comic = new Comic();

        // $new_comic->title = $data['title'];
        // $new_comic->price = $data['price'];
        // $new_comic->type = $data['type'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->series = $data['series'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->description = $data['description'];

        $new_comic = Comic::create($data);

        return redirect()->route('comics.show', $new_comic->id);
    }

    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {

        $data = $request->all();

        $comic->title = $data['title'];
        $comic->price = $data['price'];
        $comic->type = $data['type'];
        $comic->sale_date = $data['sale_date'];
        $comic->series = $data['series'];
        $comic->thumb = $data['thumb'];
        $comic->description = $data['description'];

        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
