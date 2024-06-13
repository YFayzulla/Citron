<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications= Publication::all();
        return view('admin.publication.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author=Author::all();
        return view('admin.publication.create',compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Publication::create($request->all());
        return redirect()->route('publication.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return view('admin.publication.show',compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        $author=Author::all();
        return view('admin.publication.edit',compact('publication','author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        $publication->update($request->all());
        return redirect()->route('publication.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('publication.index');
    }
}
