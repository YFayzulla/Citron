<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        if ($services->count() > 0) {
            return response()->json([
                'status' => 200,
                'Services' => $services
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
            $service = Service::create([
                'name_uz' => $request->name_uz,
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'desc_uz' => $request->desc_uz,
                'desc_ru' => $request->desc_ru,
                'desc_en' => $request->desc_en,
                'image' => $request->image
            ]);

            if ($service) {

                return response()->json([
                    'status' => 200,
                    'message' => "Service Created Successfully"
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
        $service = Service::find($id);
        if ($service) {

            return response()->json([
                'status' => 200,
                'Service' => $service
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Service Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $service = Service::find($id);
        if ($service) {

            return response()->json([
                'status' => 200,
                'Service' => $service
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Service Found!"
            ], 404);
        }
    }

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

            $service = Service::find($id);
            if ($service) {
                $service->update([
                    'name_uz' => $request->name_uz,
                    'name_ru' => $request->name_ru,
                    'name_en' => $request->name_en,
                    'desc_uz' => $request->desc_uz,
                    'desc_ru' => $request->desc_ru,
                    'desc_en' => $request->desc_en,
                    'image' => $request->image
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Service Updated Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 404,
                    'message' => "No Such Service Found!"
                ], 404);
            }
        }
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service) {

            $service->delete();
            return response()->json([
                'status' => 200,
                'message' => "Service Deleted Successfully"
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Service Found!"
            ], 404);
        }
    }
}
