<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use App\result;
use App\User;

class ReportController extends Controller
{
    public function index()
    {
        $array =[];
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $r = Report::where('user_id', $user->id)->first();
            $s = result::where('student_id', $user->id)->get();
            $array['1']=$r;
            $array['2'] = $s;

            $massage = '';
            $status = 500;

            if ($array) {
                $massage = 'data get successfully';
                $status = 200;
            } else {
                $massage = 'Error in get Data';
            }

            return response()->json(['data' => $array, 'massage' => $massage, 'status' => $status]);
           
        }
        $r = Report::where('user_id', Auth()->User()->id)->first();
        $s = result::where('student_id', Auth()->User()->id)->get();
        $array['1'] = $r;
        $array['2'] = $s;

        $massage = '';
        $status = 500;

        if ($array) {
            $massage = 'data get successfully';
            $status = 200;
        } else {
            $massage = 'Error in get Data';
        }

        return response()->json(['data' => $array, 'massage' => $massage, 'status' => $status]);
    }
}
