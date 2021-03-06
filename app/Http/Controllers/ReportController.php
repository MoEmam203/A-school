<?php

namespace App\Http\Controllers;

use App\Report;
use App\result;
use App\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $r = Report::where('user_id', $user->id)->first();
            $s = result::where('student_id', $user->id)->get();
            return view('parent.monthlyReport', ['r' => $r, 's' => $s]);
        }
        $r = Report::where('user_id',Auth()->User()->id)->first();
        $s = result::where('student_id', Auth()->User()->id)->get();
        return view ('parent.monthlyReport' , ['r'=>$r, 's'=>$s]);
    }


    public function create(){
        return view('admin.reports.addreport');
    }

    public function store(){
        request()->validate([
            'user_id' => 'required',
            'absent' => 'required',
            'notes' => 'nullable',
        ]);

        $r = new Report();

        $r->user_id = request('user_id');
        $r->absent = request('absent');
        $r->notes = request('notes');

        $r->save();

        Session()->flash('success', 'report saved succesfully');
        return redirect('/admin/report/create');
    }
}
