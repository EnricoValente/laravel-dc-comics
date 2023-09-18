<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics=Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'required',
            'thumb'=>'nullable|max:1020',
            'price'=>'required|numeric|min:1|max:100',
            'series'=>'required',
            'sale_date'=>'required|date',
            'type'=>'required|max:30',
            'artists'=>'nullable',
            'writers'=>'nullable',
        ], [
            'title.required'=>'Il titolo è obbligatorio',
            'title.max'=>'Il titolo può contenere al massimo 100 caratteri',
            'descripton.required'=>'La descrizione è obbligatoria',
            'thumb.max'=>'Il link immagine può avere al massimo 1020 caratteri',
            'price.required'=>'Il prezzo è obbligatorio',
            'price.numeric'=>'Il prezzo deve essere un numero',
            'price.min'=>'Il prezzo deve essere minimo di 1',
            'price.max'=>'Il prezzo può essere al massimo di 100',
            'series.required'=>'Questo campo è obbligatorio',
            'sale_date.required'=>'Questo campo è obbligatorio',
            'type.required'=>'Questo campo è obbligatorio',
            'type.max'=>'Questo campo può essere lungo al massimo 30 caratteri',

        ]);
    
        $formData=$request->all();
        $comic = new Comic();
        $comic->title=$formData['title'];
        $comic->description=$formData['description'];
        // $comic->thumb=$formData['thumb'];
        $comic->price=$formData['price'];
        $comic->series=$formData['series'];
        $comic->sale_date=$formData['sale_date'];
        $comic->type=$formData['type'];
        //  $comic->artists=implode(', ',$formData['artists']);
        //  $comic->writers=implode(', ',$formData['writers']);
        $comic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic=Comic::findOrFail($id);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic=Comic::findOrFail($id);
        $data= $request->all();
        $comic->title=$data['title'];
        $comic->description=$data['description'];
        // $comic->thumb=$data['thumb'];
        $comic->price=$data['price'];
        $comic->series=$data['series'];
        $comic->sale_date=$data['sale_date'];
        $comic->type=$data['type'];
        $comic->artists=$data['artists'];
        $comic->writers=$data['writers'];
        $comic->save();


    }







    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
