<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        echo 'welcome';
    }


    public function show($id){
        $user = User::findOrFail($id);
        return view('student.studentData', ['user'=>$user]);
    }
}
