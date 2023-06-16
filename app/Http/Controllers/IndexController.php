<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $abouts = About::all();
        $projects = Project::all();
        $services = Service::all();
        return view('homepage', compact('abouts', 'projects', 'services'));
    }
    public function contact(){
        $user=User::find(1);
//        dd($user);
        return view('contact',compact('user'));
    }
    public function store(Request $request)
    {
//        dd($request);
        Contact::create($request->all());
        return redirect()->back();
    }

}
