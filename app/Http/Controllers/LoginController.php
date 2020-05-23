<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{

    public function index(){

        return view('login.index');
    }

   public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            Session()->flash('message' , 'Oppes! You have entered invalid credentials');
            return redirect()->back();
        }
        $id = Auth()->User()->id;
        
        // if(Auth()->User()->is_admin=='admin'){
        //     return Redirect::route('admin', array('id' => $id));
        // }
        // return redirect('info');
        return Redirect::route('info', array('id' =>$id));
    }
}
