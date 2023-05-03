<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.project.index',["projects"=>$projects]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name_uz'=>'required|string',
            'name_ru'=>'required|string',
            'name_en'=>'required|string',
            'desc_uz'=>'required|string',
            'desc_ru'=>'required|string',
            'desc_en'=>'required|string',
            'image'=>'required'
        ]);
        $data= new Project();
        if($request->hasfile('image')){
//            dd($request);
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Aphoto'),$filename);
            $data['name_uz']=$request->name_uz;
            $data['name_ru']=$request->name_ru;
            $data['name_en']=$request->name_en;
            $data['desc_uz']=$request->desc_uz;
            $data['desc_ru']=$request->desc_ru;
            $data['desc_en']=$request->desc_en;
            $data['image']=$filename;
        }

        $data->save();
        return redirect()->route('projects.index')->with('success');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $projects=Project::all();
        return view('project',["projects"=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
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
        $user = auth()->user()->name;
        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('Aphoto'), $filename);
            $project['name_uz'] = $request->name_uz;
            $project['name_ru'] = $request->name_ru;
            $project['name_en'] = $request->name_en;
            $project['desc_uz'] = $request->desc_uz;
            $project['desc_ru'] = $request->desc_ru;
            $project['desc_en'] = $request->desc_en;
            $project['image']=$filename;
//            dd($request);

            $project->update($request->all());
            return redirect()->route('projects.index')->with('success');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
