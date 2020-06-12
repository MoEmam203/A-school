<?php

namespace App\Http\Controllers\Api;

use App\subject;
use App\result;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $r = result::where('student_id', $user->id)->get();
            $data = $r;
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


        $r = result::where('student_id', Auth()->User()->id)->get();

        $data = $r;
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
