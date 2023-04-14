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
}
