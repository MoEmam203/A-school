<?php

namespace App\Http\Controllers;

use App\subject;
use App\ExamSchedule;
use App\User;
use Illuminate\Http\Request;

class ExamScheduleController extends Controller
{

    public function index(){
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $s = ExamSchedule::where('user_id', $user->id)->get();
            return view('parent.examTable',['s'=>$s]);
        }

        $s = ExamSchedule::where('user_id', Auth()->User()->id)->get();
        return view('parent.examTable', ['s' => $s]);
    }

    public function all(){
        $user = User::where('level',1)->first();
        $s = ExamSchedule::where('user_id', $user->id)->get();

        $user2 = User::where('level', 2)->first();
        $a = ExamSchedule::where('user_id', $user2->id)->get();

        $user3 = User::where('level', 3)->first();
        $b = ExamSchedule::where('user_id', $user3->id)->get();

        // $user4 = User::where('level', 4)->first();
        // $c = ExamSchedule::where('user_id', $user4->id)->get();

        // $user5 = User::where('level', 5)->first();
        // $d = ExamSchedule::where('user_id', $user5->id)->get();

        // $user6 = User::where('level', 6)->first();
        // $e = ExamSchedule::where('user_id', $user6->id)->get();


        return view('admin.schedules.allexamscheduels',[
            's' => $s,
            'a' => $a,
            'b' => $b,
            // 'c' => $c,
            // 'd' => $d,
            // 'e' => $e,
            ]);
    }

    public function create(){
        $s = subject::all()->sortBy('level');
        return view('admin.schedules.addexamschedule',['s'=> $s]);
    }

    public function store(){
        request()->validate([
            'date' => 'required',
            'day' => 'required',
            'sub_id' => 'required',
            'user_id' => 'required',
            // 'e_id' => 'nullable',
            'committee' => 'required',
            'seat' =>'required',
            'time' => 'required',
            'level' =>'required',
            'type' => 'required'
        ]);

        $sch = new ExamSchedule();

        $sch->date = request('date');
        $sch->day = request('day');
        $sch->sub_id = request('sub_id');
        $sch->user_id = request('user_id');
        // $sch->e_id = request('e_id');
        $sch->committee = request('committee');
        $sch->seat_number = request('seat');
        $sch->time = request('time');
        $sch->level = request('level');
        $sch->type = request('type');

        $sch->save();
        Session()->flash('success', 'schedule saved succesfully');
        return redirect('/admin/exam/shedule/create');
    }
}
