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
        $Abouts = About::all();
        if ($Abouts->count() > 0) {
            return response()->json([
                'status' => 200,
                'Abouts' => $Abouts
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
            'email' => 'required|email|max:191',
            'subject' => 'required|string|max:191',
            'message' => 'required|string|max:191'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {
            $About = About::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message

            ]);

            if ($About) {

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
        $About = About::find($id);
        if ($About) {

            return response()->json([
                'status' => 200,
                'About' => $About
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
            'email' => 'required|email|max:191',
            'subject' => 'required|string|max:191',
            'message' => 'required|string|max:191'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else {

            $About = About::find($id);
            if ($About) {
                $About->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message
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
        $About = About::find($id);
        if ($About) {

            $About->delete();
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
