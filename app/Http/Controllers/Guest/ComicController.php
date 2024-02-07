<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('Guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $newComic = new Comic();
        /* $newComic->title = $newComicData['title'];
        $newComic->description = $newComicData['description'];
        $newComic->thumb = $newComicData['thumb'];
        $newComic->price = $newComicData['price'];
        $newComic->series = $newComicData['series'];
        $newComic->sale_date = $newComicData['sale_date'];
        $newComic->type = $newComicData['type'];*/
        //$newComic->save();

        $request->validate(
            [
                'title' => ['required', 'unique:comics', 'min:4', 'max:40'],
                'description' => ['required', 'min:4', 'max:1000'],
                'thumb' => ['required', 'min:1', 'url:http,https'],
                'price' => ['required'],
                'series' => ['required', 'min:1', 'max:10'],
                'sale_date' => ['required'],
                'type' => ['required', 'min:1', 'max:10'],
            ],
            [
                'title.required' => 'inserisci titolo' // uqesto ci da la possibilità di inserire un testo di errore personale 
            ]
        );


        $newComic = Comic::create($newComicData);


        return redirect()->route('Guest.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $comic = Comic::findOrFail($id);
        return view('Guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('Guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        // $comic = Comic::findOrFail($id);


        $comic->update($data);
        return redirect()->route('Guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
