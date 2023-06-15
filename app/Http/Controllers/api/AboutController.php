<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return About::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd('salom');
        $data=new About();
        $data->name = $request->name;
        $data->specialty_uz = $request->specialty_uz;
        $data->specialty_ru = $request->specialty_ru;
        $data->specialty_en = $request->specialty_en;
        $data->email = $request->email;
        $data->image = $request->image;
//
//
        $data->save();
        return response()->json('yaratildi',200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $id)
    {
        dd($id);
//        dd('salom');
        $id->name = $request->name;
        $id->specialty_uz = $request->specialty_uz;
        $id->specialty_ru = $request->specialty_ru;
        $id->specialty_en = $request->specialty_en;
        $id->email = $request->email;
        $id->image = $request->image;
        $id->save();
        return response()->json('updated',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
