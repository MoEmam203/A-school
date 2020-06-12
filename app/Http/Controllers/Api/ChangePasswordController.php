<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

use App\User;

class ChangePasswordController extends Controller
{
    public function store(Request $request)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);



        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        $data = '';
        
        $massage = '';
        $status = 500;

        if ($data) {
            $massage = 'Password change successfully ';
            $status = 200;
        } else {
            $massage = 'Error in change password';
        }
        return response()->json(['data' => $data, 'massage' => $massage, 'status' => $status]);
       
    }
}
