<?php

namespace App\Http\Controllers;

use App\subject;
use App\result;
use App\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    public function index(){
        if (Auth()->User()->is_admin == 'parent') {
            $user = User::where('parent_id', Auth()->User()->id)->first();
            $r = result::where('student_id', $user->id)->get();
            return view('parent.termScore', ['r' => $r]);
        }


        $r = result::where('student_id',Auth()->User()->id)->get();
        
        return view('parent.termScore',['r'=>$r]);
    }

    // public function all()
    // {
    //     $r = result::where('student_id', Auth()->User()->id)->get();
    //     // $r = $r->where('type', 'first')->get();
    //     return view('parent.generalScore', ['r' => $r]);
    // }

    public function create(){
        $s= subject::all()->sortBy('level');
        return view('admin.results.addresult',['s'=>$s]);
    }

    public function store(){
        request()->validate([
            'user_id' => 'required',
            'result' => 'required',
            'sub_id' => 'required',
            // 'e_id' => 'nullable',
            'degree' => 'required',
            'final' => 'required',
            'mid' => 'required',
            'oral' => 'required',
            'pract' => 'nullable',
            'type' => 'required'
        ]);
        
        $r = new result;

        $r->student_id = request('user_id');
        $r->result = request('result');
        $r->sub_id = request('sub_id');
        $r->degree = request('degree');
        $r->final = request('final');
        $r->mid = request('mid');
        $r->oral = request('oral');
        $r->pract = request('pract');
        $r->type = request('type');

        $r->save();

        Session()->flash('success', 'Subject result saved succesfully');
        return redirect('/admin/result/create');

    }
}
