<?php

namespace App\Http\Controllers;
use App\User;
use App\complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //  Show Users
    public function allstudents(){
        $users = User::where('is_admin','student')->get();
       return view('admin.allstudents',['users' => $users]);
    }

    public function allparents()
    {
        $users = User::where('is_admin', 'parent')->get();
        return view('admin.allparents', ['users' => $users]);
    }

    // Add user
    public function create(){
        return view('admin.adduser');
    }

    public function store(){
        request()->validate([
            'id' => 'required|unique:users|max:10|numeric|min:3',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|',
            'is_admin' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
            'type' => 'required',
            'age' => 'required|numeric',
            'blood_type' => 'required', 
            'image' =>'nullable',
            'level' => 'nullable',
            'parent_id' => 'nullable',
            'job' => 'nullable',
        ]);

        $user = new User();
        $user->id = request('id');
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->is_admin = request('is_admin');
        $user->dob = request('dob');
        $user->address = request('address');
        $user->type = request('type');
        $user->age = request('age');
        $user->blood_type = request('blood_type');
        $user->img = request('image');
        $user->level = request('level');
        $user->parent_id = request('parent_id');
        $user->job = request('job');
        
        $user->save();
        Session()->flash('sucess', 'User saved succesfully');
        return redirect('/admin/create');
    }


    // Show Complaints
    public function complaints(){
        $c = Complaint::all();
        return view('admin.c&s', ['c' => $c]);
    } 

}
