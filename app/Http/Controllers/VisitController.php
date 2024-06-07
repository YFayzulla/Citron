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



        if ($request->hasfile('photo')) {

            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('photo'), $filename);
            $request['photo'] = $filename;

        }


        $visit = Visit::create($request->all());
        $visit['photo'] = $filename;
        $visit->save();

        return redirect()->route('visit.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Visit $visit)
    {
        $visits = Visit::all();
        return view('visit', compact('visits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visit $visit)
    {
        return view('admin.visit.edit', compact('visit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visit $visit)
    {
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $uuid = Str::uuid()->toString();
            $filename = $uuid . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $filename);
        }
        $visit->update($request->all());
        $visit['photo'] = $filename;
        $visit->save();
        return redirect()->route('visit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visit $visit)
    {
        $visit->delete();
        return redirect()->route('visit.index')->with('success', 'Visit deleted');
    }
}
