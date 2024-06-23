<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Publication;
use App\Service\UploadFileService;
use Illuminate\Http\Request;

class PublicationController extends Controller
{

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
        $pdfPath = UploadFileService::uploadFile($request->file('file'), 'files');
        Publication::create([
            'name'=>$request->name,
            'author_id'=>$request->author_id,
            'ex_name'=>$request->ex_name,
            'date'=>$request->date,
            'file'=>$pdfPath
        ]);

        return redirect()->route('publication.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return view('publication',compact('publication'));
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
