<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    public function index(){

        return view('login.index');
    }

//    public function postLogin(Request $request)
//     {
//         request()->validate([
//             'email' => 'required',
//             'password' => 'required',
//             'is_admin' => 'required'
//         ]);

//         $credentials = $request->only('email', 'password');
//         if (!Auth::attempt($credentials)) {
//             Session()->flash('message' , 'Oppes! You have entered invalid credentials');
//             return redirect()->back();
//         }
//         $id = Auth()->User()->id;
        
//         // if(Auth()->User()->is_admin=='admin'){
//         //     return Redirect::route('admin', array('id' => $id));
//         // }
//         // return redirect('info');
//         return Redirect::route('info', array('id' =>$id));
//     }


    public function postLogin(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);

        $fieldType = filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (auth()->attempt(array($fieldType => $input['name'], 'password' => $input['password']))) {
            $id = Auth()->User()->id;
            return Redirect::route('info', array('id' =>$id));
        } else {
            Session()->flash('message', 'Oppes! You have entered invalid credentials');
            return redirect()->back();
        }

    }
}
