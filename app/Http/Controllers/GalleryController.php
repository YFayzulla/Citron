<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required'
        ]);
        $data= new Gallery();
        if($request->hasfile('image')){
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Aphoto'),$filename);
            $data['name']=$request->name;
            $data['desc']=$request->desc;
            $data['image']=$filename;
//            dd($request->name);
        }

        $data->save();
        return redirect()->route('gallery.index')->with('success', 'Gallery created');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $galleries = Gallery::all();
        return view('gallery',compact('galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'name'=>'required|string',
            'desc'=>'required',
            'thumbnail'=>'required'
        ]);

        if($request->hasfile('thumbnail')){
            $file= $request->file('thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('Aphoto'),$filename);
            $gallery['name']=$request->name;
            $gallery['desc']=$request->desc;
            $gallery['image']=$filename;
        }

        $gallery->update($request->all());
        return redirect()->route('gallery.index')->with('success', 'Gallery updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted');
    }
}
