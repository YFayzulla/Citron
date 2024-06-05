<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visits = Visit::all();
        return view('admin.visit.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $file = $request->file('photo');
        $uuid = Str::uuid()->toString();
        $filename = $uuid . '-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('Aphoto'), $filename);

        $visit = new Visit();

        $visit['country_uz'] = $request['country_uz'];
        $visit['country_ru'] = $request['country_ru'];
        $visit['country_en'] = $request['country_en'];
        $visit['description_uz'] = $request['description_uz'];
        $visit['description_ru'] = $request['description_ru'];
        $visit['description_en'] = $request['description_en'];
        $visit['date'] = $request['date'];
        $visit['photo'] = $filename;
        $visit['university_uz_en'] = $request['university_uz_en'];
        $visit['university_ru'] = $request['university_ru'];

        $visit->save();


        return redirect()->route('visit.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
