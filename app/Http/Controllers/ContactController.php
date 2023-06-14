<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contact as ContactAlias;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Contact::all();
        return view('admin.contact',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
//        $data=Contact::all();
        return view('contact');    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactAlias $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactAlias $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactAlias $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
