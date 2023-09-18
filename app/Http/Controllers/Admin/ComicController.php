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
        $formData=$request->all();
        $comic = new Comic();
        $comic->title=$formData['title'];
        $comic->description=$formData['description'];
        // $comic->thumb=$formData['thumb'];
        $comic->price=$formData['price'];
        $comic->series=$formData['series'];
        $comic->sale_date=$formData['sale_date'];
        $comic->type=$formData['type'];
        // $comic->artists=implode(', ',$formData['artists']);
        // $comic->writers=implode(', ',$formData['writers']);
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
