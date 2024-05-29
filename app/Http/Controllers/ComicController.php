<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if(!empty($request->query('search'))){
            $type = $request->query('search');
            $comics = Comic::where('type', $type)->get();
        }else{
            $comics = Comic::all();
        }
    //   $comics = Comic::all();
    //  dd($comics);
    return view("comics.index", compact("comics"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   


        $request->validate([
            'title' => 'required|max:255|min:5',
            'description' => 'nullable',
            'thumb' => 'nullable|255',
            'price' => 'required|max:255|min:1',
            'series' => 'required|max:255',
            'sale_date' => 'required|date|max:255',
            'type' => 'required|max:20',
        ]);
        $form_data = $request->all();
        $new_comic = Comic::create($form_data);
        return redirect()->route('comics.index')->with('message', "Created {$new_comic->title} successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Deleted {$comic->title} successfully");
    }
}
