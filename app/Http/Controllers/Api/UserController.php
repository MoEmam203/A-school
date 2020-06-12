<?php

namespace App\Http\Controllers\Api;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        if (Auth()->User()->is_admin == 'parent') {
            $id = Auth()->User()->id;
            $user = User::where('parent_id', $id)->first();
            // Session()->flash('mssg', 'Welcome');
           $massage = '';
           $status = 500;
           if($user){
                $massage = 'data get successfully ';
                $status = 200;
           } else {
                $massage = 'Error in get data';
            }

            return response()->json(['data' => $user, 'massage' => $massage, 'status' => $status]);
        }

        // Student

        $id = Auth()->User()->id;
        $user = User::findOrFail($id);
        // Session()->flash('mssg', 'Welcome');
        $massage = '';
        $status = 500;
        if ($user) {
            $massage = 'data get successfully ';
            $status = 200;
        } else {
            $massage = 'Error in get data';
        }

        return response()->json(['data' => $user, 'massage' => $massage, 'status' => $status]);
    }
}
