<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Service::all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string',
            'name_ru' => 'required|string',
            'name_en' => 'required|string',
            'desc_uz' => 'required|string',
            'desc_ru' => 'required|string',
            'desc_en' => 'required|string',
            'image' => 'required'
        ]);
        $data= new Service();
        if($request->hasfile('image')){
//            dd($request);
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Aphoto'),$filename);
            $data['name_uz']=$request['name_uz'];
            $data['name_ru']=$request['name_ru'];
            $data['name_en']=$request['name_en'];
            $data['desc_uz']=$request['desc_uz'];
            $data['desc_ru']=$request['desc_ru'];
            $data['desc_en']=$request['desc_en'];
            $data['image']=$filename;
        }
            $data->save();
        return redirect()->route('services.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $services=Service::all();
        return view('service',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {

        $request->validate([
            'name_uz' => 'required|string',
            'name_ru' => 'required|string',
            'name_en' => 'required|string',
            'desc_uz' => 'required|string',
            'desc_ru' => 'required|string',
            'desc_en' => 'required|string',
            'thumbnail' => 'required'
        ]);

        $user= auth()->user()->name;
        if($request->hasfile('thumbnail')){
            $file= $request->file('thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('Aphoto'),$filename);
            $service['name_en']=$request->name_en;
            $service['name_uz']=$request->name_uz;
            $service['name_ru']=$request->name_ru;
            $service['desc_en']=$request->desc_en;
            $service['desc_uz']=$request->desc_uz;
            $service['desc_ru']=$request->desc_ru;
            $service['image']=$filename;
        }
        $service->update($request->all());
        return redirect()->route('services.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success');
    }
}
