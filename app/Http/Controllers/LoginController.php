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
            'u_id' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);

        $fieldType = filter_var($request->u_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'u_id';
        if (auth()->attempt(array($fieldType => $input['u_id'], 'password' => $input['password'], 'is_admin' => $input['is_admin']))) {
            
            // Admin 
            if(Auth()->User()->is_admin == 'admin'){
                return redirect('admin');
            }

            // Parent
            if (Auth()->User()->is_admin == 'parent') {
                $id = Auth()->User()->u_id;
                $user = User::where('parent_id',$id)->first();
                return view('parent.data', ['user' => $user]);
            }

            // Student
            $id = Auth()->User()->id;
            $user = User::findOrFail($id);
            return view('student.studentData', ['user' => $user]);
            // return Redirect::route('info', array('id' =>$id));
        } else {
            Session()->flash('message', 'Oppes! You have entered invalid credentials');
            return redirect()->back();
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
