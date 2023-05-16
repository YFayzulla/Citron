<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        if ($contacts->count() > 0) {
            return response()->json([
                'status' => 200,
                'contacts' => $contacts
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
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message

            ]);

            if ($contact) {

                return response()->json([
                    'status' => 200,
                    'message' => "Contact Created Successfully"
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
        $contact = Contact::find($id);
        if ($contact) {

            return response()->json([
                'status' => 200,
                'Contact' => $contact
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Contact Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        if ($contact) {

            return response()->json([
                'status' => 200,
                'Contact' => $contact
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Contact Found!"
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

            $contact = Contact::find($id);
            if ($contact) {
                $contact->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Contact Updated Successfully"
                ], 200);
            }else {

                return response()->json([
                    'status' => 404,
                    'message' => "No Such Contact Found!"
                ], 404);
            }
        }
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {

            $contact->delete();
            return response()->json([
                'status' => 200,
                'message' => "Contact Deleted Successfully"
            ], 200);
        }else {

            return response()->json([
                'status' => 404,
                'message' => "No such Contact Found!"
            ], 404);
        }
    }

}
