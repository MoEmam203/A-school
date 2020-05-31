<?php

namespace App\Http\Controllers;

use App\User;
use Session;
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
                // Session()->flash('mssg', 'Welcome');
                return view('student.studentData', ['user' => $user]);
            }

            // Student
            
            $id = Auth()->User()->id;
            $user = User::findOrFail($id);
            // Session()->flash('mssg', 'Welcome');
            return view('student.studentData', ['user' => $user]);
            // return Redirect::route('info', array('id' =>$id));

    }
}