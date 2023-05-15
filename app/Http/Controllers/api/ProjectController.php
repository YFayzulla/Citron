<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        if ($projects->count() > 0) {
            return response()->json([
                'status' => 200,
                'Projects' => $projects
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Record Found'
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_uz' => 'required|string|max:191',
            'name_ru' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'desc_uz' => 'required|string|max:191',
            'desc_ru' => 'required|string|max:191',
            'desc_en' => 'required|string|max:191',
            'image' => 'required|image|size:1024',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {
            $project = Project::create([
                'name_uz' => $request->name_uz,
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'desc_uz' => $request->desc_uz,
                'desc_ru' => $request->desc_ru,
                'desc_en' => $request->desc_en,
                'image' => $request->image,
                'partner' => $request->partner,
                'status' => $request->status
            ]);

            if ($project) {

                return response()->json([
                    'status' => 200,
                    'message' => "Project Created Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $project = Project::find($id);
        if ($project) {

            return response()->json([
                'status' => 200,
                'Project' => $project
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Project Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $project = Project::find($id);
        if ($project) {

            return response()->json([
                'status' => 200,
                'Project' => $project
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Project Found!"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name_uz' => 'required|string|max:191',
            'name_ru' => 'required|string|max:191',
            'name_en' => 'required|string|max:191',
            'desc_uz' => 'required|string|max:191',
            'desc_ru' => 'required|string|max:191',
            'desc_en' => 'required|string|max:191',
            'image' => 'required|image|size:1024',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {

            $project = Project::find($id);
            if ($project) {
                $project->update([
                    'name_uz' => $request->name_uz,
                    'name_ru' => $request->name_ru,
                    'name_en' => $request->name_en,
                    'desc_uz' => $request->desc_uz,
                    'desc_ru' => $request->desc_ru,
                    'desc_en' => $request->desc_en,
                    'image' => $request->image,
                    'partner' => $request->partner,
                    'status' => $request->status
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Project Updated Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 404,
                    'message' => "No Such Project Found!"
                ], 404);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project) {

            $project->delete();
            return response()->json([
                'status' => 200,
                'message' => "Project Deleted Successfully"
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Project Found!"
            ], 404);
        }
    }

}
