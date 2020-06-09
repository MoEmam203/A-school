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
        return "all exams schedules";
    }

    public function create(){
        $s = subject::all()->sortBy('level');
        return view('admin.schedules.addexamschedule',['s'=>$s]);
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
