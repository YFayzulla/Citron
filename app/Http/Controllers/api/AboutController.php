<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        if ($abouts->count() > 0) {
            return response()->json([
                'status' => 200,
                'abouts' => $abouts
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Record Found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'speciality_uz' => 'required|string|max:191',
            'speciality_ru' => 'required|string|max:191',
            'speciality_en' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'image' => 'required|image|size:1024',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {
            $about = About::create([
                'name' => $request->name,
                'speciality_uz' => $request->speciality_uz,
                'speciality_ru' => $request->speciality_ru,
                'speciality_en' => $request->speciality_en,
                'email' => $request->email,
                'image' => $request->image
            ]);

            if ($about) {

                return response()->json([
                    'status' => 200,
                    'message' => "About Created Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }

    public function show($id)
    {
        $about = About::find($id);
        if ($about) {

            return response()->json([
                'status' => 200,
                'about' => $about
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such About Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $about = About::find($id);
        if ($about) {

            return response()->json([
                'status' => 200,
                'about' => $about
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such About Found!"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'speciality_uz' => 'required|string|max:191',
            'speciality_ru' => 'required|string|max:191',
            'speciality_en' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'image' => 'required|image|size:1024',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {

            $about = About::find($id);
            if ($about) {
                $about->update([
                    'name' => $request->name,
                    'speciality_uz' => $request->speciality_uz,
                    'speciality_ru' => $request->speciality_ru,
                    'speciality_en' => $request->speciality_en,
                    'email' => $request->email,
                    'image' => $request->image
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "About Updated Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 404,
                    'message' => "No Such About Found!"
                ], 404);
            }
        }
    }

    public function destroy($id)
    {
        $about = About::find($id);
        if ($about) {

           $about->delete();
            return response()->json([
                'status' => 200,
                'message' => "About Deleted Successfully"
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such About Found!"
            ], 404);
        }
    }
}

