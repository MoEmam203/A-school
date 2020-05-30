<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     echo 'welcome';
    // }


    public function show(){
        // Admin 
            if(Auth()->User()->is_admin == 'admin'){
                return redirect('admin');
            }

            // Parent
            if (Auth()->User()->is_admin == 'parent') {
                $id = Auth()->User()->id;
                $user = User::where('parent_id',$id)->first();
                return view('student.studentData', ['user' => $user]);
            }

            // Student
            
            $id = Auth()->User()->id;
            $user = User::findOrFail($id);
            return view('student.studentData', ['user' => $user]);
            // return Redirect::route('info', array('id' =>$id));

    }
}