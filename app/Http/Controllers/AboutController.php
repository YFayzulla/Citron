<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts=About::all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'specialty_uz'=>'required|string',
            'specialty_ru'=>'required|string',
            'specialty_en'=>'required|string',
            'email'=>'required|email',
            'tel'=>'required',
            'image'=>'required'
            ]);
        $data= new About();
        if($request->hasfile('image')){
//            dd($request);
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Aphoto'),$filename);
            $data['name']=$request->name;
            $data['specialty_uz']=$request->specialty_uz;
            $data['specialty_ru']=$request->specialty_ru;
            $data['specialty_en']=$request->specialty_en;
            $data['email']=$request->email;
            $data['tel']=$request->tel;
            $data['telegram']=$request->telegram;
            $data['instagram']=$request->instagram;
            $data['image']=$filename;
        }

        $data->save();
        return redirect()->route('abouts.index')->with('success');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $abouts=About::all();
        return view('about',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(About $about)
    {
        return view('admin.about.edit',['about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, About $about)
    {

        $request->validate([
            'name'=>'required|string',
            'specialty_uz'=>'required|string',
            'specialty_ru'=>'required|string',
            'specialty_en'=>'required|string',
            'email'=>'required|email',
            'tel'=>'required',
            'thumbnail'=>'required'
        ]);
            $user= auth()->user()->name;
            if($request->hasfile('thumbnail')){

            $file= $request->file('thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('Aphoto'),$filename);
            $about['name']=$request->name;
            $about['specialty_uz']=$request->specialty_uz;
            $about['specialty_ru']=$request->specialty_ru;
            $about['specialty_en']=$request->specialty_en;
            $about['email']=$request->email;
            $about['tel']=$request->tel;
            $about['telegram']=$request->telegram;
            $about['instagram']=$request->instagram;
            $about['image']=$filename;
//            dd($request);

        }
//@dd($data,$request);
        $about->update($request->all());
        return redirect()->route('abouts.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back()->with('success');
    }
}
