<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subject;
use App\schedule;
use App\User;
use App\ExamSchedule;

class ScheduleController extends Controller
{
    public function study()
    {

        $array = [];
        if (Auth()->User()->is_admin == 'parent') {
           
            $user = User::where('parent_id', Auth()->User()->id)->first();
            // dd($user);
            $s = schedule::where('level', $user->level)->get();
            $s1 = $s->where('day_order', 1);
            $s2 = $s->where('day_order', 2);
            $s3 = $s->where('day_order', 3);
            $s4 = $s->where('day_order', 4);
            $s5 = $s->where('day_order', 5);
            $s6 = $s->where('day_order', 6);

            $array["1"] = $s1;
            $array["2"] = $s2;
            $array["3"] = $s3;
            $array["4"] = $s4;
            $array["5"] = $s5;
            $array["6"] = $s6;
            
            $massage = '';
            $status = 500;

            if($array){
                $massage = 'data get successfully';
                $status = 200;
                
            }else {
                $massage = 'Error in get Data';
            }

            return response()->json(['data' => $array, 'massage' => $massage, 'status' => $status]);
           
        }
        $s = schedule::where('level', Auth()->User()->level)->get();
        $s1 = $s->where('day_order', 1);
        $s2 = $s->where('day_order', 2);
        $s3 = $s->where('day_order', 3);
        $s4 = $s->where('day_order', 4);
        $s5 = $s->where('day_order', 5);
        $s6 = $s->where('day_order', 6);
        //  dd($s);
        $array["1"] = $s1;
        $array["2"] = $s2;
        $array["3"] = $s3;
        $array["4"] = $s4;
        $array["5"] = $s5;
        $array["6"] = $s6;

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

    public function exam()
    {
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $s = ExamSchedule::where('user_id', $user->id)->get();
            $massage = '';
            $status = 500;

            if ($s) {
                $massage = 'data get successfully';
                $status = 200;
            } else {
                $massage = 'Error in get Data';
            }

            return response()->json(['data' => $s, 'massage' => $massage, 'status' => $status]);
        }

        $s = ExamSchedule::where('user_id', Auth()->User()->id)->get();
        $massage = '';
        $status = 500;

        if ($s) {
            $massage = 'data get successfully';
            $status = 200;
        } else {
            $massage = 'Error in get Data';
        }

        return response()->json(['data' => $s, 'massage' => $massage, 'status' => $status]);
    }
}
