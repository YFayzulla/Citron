<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        if ($galleries->count() > 0) {
            return response()->json([
                'status' => 200,
                'galleries' => $galleries
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
            'desc' => 'required|string|max:191',
            'image' => 'required|image|size:1024'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {
            $gallery = Gallery::create([
                'name' => $request->name,
                'desc' => $request->desc,
                'image' => $request->image
            ]);

            if ($gallery) {

                return response()->json([
                    'status' => 200,
                    'message' => "Gallery Created Successfully"
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
        $gallery = Gallery::find($id);
        if ($gallery) {

            return response()->json([
                'status' => 200,
                'Gallery' => $gallery
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Gallery Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery) {

            return response()->json([
                'status' => 200,
                'Gallery' => $gallery
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Gallery Found!"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'desc' => 'required|string|max:191',
            'image' => 'required|image|size:1024'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {

            $gallery = Gallery::find($id);
            if ($gallery) {
                $gallery->update([
                    'name' => $request->name,
                    'desc' => $request->desc,
                    'image' => $request->image
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Gallery Updated Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 404,
                    'message' => "No Such Gallery Found!"
                ], 404);
            }
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery) {

            $gallery->delete();
            return response()->json([
                'status' => 200,
                'message' => "Gallery Deleted Successfully"
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Gallery Found!"
            ], 404);
        }
    }
}
