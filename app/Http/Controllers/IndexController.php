<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectHasUser;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $projects = Project::all();
        $services = Service::all();
        return view('homepage', compact('abouts', 'projects', 'services'));
    }

    public function contact()
    {
        $user = User::find(1);
//        dd($user);
        return view('contact', compact('user'));
    }

    public function store(Request $request)
    {
//        dd($request);
        Contact::create($request->all());
        return redirect()->back();
    }

    public function project_add_user($id)
    {
        $users = ProjectHasUser::where('project_id', $id)->get();
//        dd($users);
        return view('admin/project/add_users', compact('id', 'users'));
    }

    public function project_create_user($id)
    {
        $users = About::all();
        return view('admin/project/create_user', compact('users', 'id'));
    }

    public function project_save_user(Request $request)
    {
        $data=ProjectHasUser::create([
            'user_id'=>$request->user_id,
            'project_id'=>$request->project_id,
        ]);


        $id=$request->project_id;

        return redirect()->route('add_user', compact('id'));
    }
    public function delete(ProjectHasUser $id){

        $id->delete();
        return redirect()->back();
    }
}
