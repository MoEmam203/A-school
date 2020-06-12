<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data = User::all();
        $massage = '';
        $status = 500;
        if ($data){
           $massage = 'data get successfully ';
           $status = 200;
        }
        else{
            $massage = 'Error in get data';
        }
        return response()->json(['data' => $data, 'massage' => $massage, 'status' => $status]);
    }

    public function post(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'id' => 'required',
            'password' => 'required',
            'is_admin' => 'required'
        ]);

        $fieldType = filter_var($request->u_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'id';
        if (auth()->attempt(array($fieldType => $input['id'], 'password' => $input['password'], 'is_admin' => $input['is_admin']))) {
            //    return redirect('date');
           $data = auth()->user();
           $massage = '';
           $status = 500;

            if ($data) {
                $massage = 'data get successfully ';
                $status = 200;
            } else {
                $massage = 'Error in get data';
            }
            return response()->json(['data' => $data, 'massage' => $massage, 'status' => $status]);
        }       
    }


    public function logout(){
        $data = '';
        $massage = '';
        $status = 500 ;

        if( Auth::logout()){
            $massage = 'User logout successfully';
            $status = 200 ;
        }

        else{
            $massage= 'Error in logout ';
        }
        return response()->json(['data' => $data, 'massage' => $massage, 'status' => $status]);
    }
}