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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
