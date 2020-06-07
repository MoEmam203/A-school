<?php

namespace App\Http\Controllers;

use App\schedule;
use App\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id);
            $s = schedule::where('level', $user->level)->groupBy('day_order')->get();
            // dd($s);
            return view('parent.studyTable', ['s' => $s]);
        }
        $s = schedule::where('level', Auth()->User()->level)->groupBy('day_order')->get();
        //  dd($s);
        return view('parent.studyTable', ['s' => $s]);
    }

    public function all()
    {
       return view ('admin.schedules.allschedules');
    }

    public function create()
    {
        return view('admin.schedules.addschedule');
    }

    public function store()
    {
        request()->validate([
            'day_order' => 'required',
            'class_order' => 'required',
            'sub_id' => 'nullable',
            'e_id' => 'nullable',
            'level' => 'required',
            'type' => 'required'
        ]);

        $sch = new schedule();
        $sch->day_order = request('day_order');
        $sch->class_order = request('class_order');
        $sch->sub_id = request('sub_id');
        $sch->e_id = request('e_id');
        $sch->level = request('level');
        $sch->type = request('type');

        $sch->save();
        Session()->flash('success', 'schedule saved succesfully');
        return redirect('/admin/schedule/create');
    }

}
