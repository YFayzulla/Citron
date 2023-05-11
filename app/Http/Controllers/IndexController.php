<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $abouts = About::all();
        $projects = Project::all();
        $service = Service::all();
        return view('index', compact('abouts', 'projects', 'service'));
    }
}
