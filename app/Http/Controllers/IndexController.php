<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('index');

    }
    public function about(){
        return view('about');
    }
    public function service(){
        $service=Service::all();
        return view('service',compact('service'));
    }
    public function project(){

        return view('project');
    }
    public function gallery(){
        return view('testimonial');
    }
    public function contact(){
        return view('contact');
    }

}
