<?php

namespace App\Http\Controllers;
use App\subject;
use App\schedule;
use App\User;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{
    public function all(){
        $sub = subject::all();
        return view('admin.allsubjects',["sub"=>$sub]);
    }

    public function create(){
        return view ('admin.addsubject');
    }

    public function store(){
         request()->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'level' => 'required'
            ]);

            $subject = new subject();
            $subject->code = request('code');
            $subject->name = request('name');
            $subject->description = request('description');
            $subject->level = request('level');

            $subject->save();
            Session()->flash('success', 'subjects saved succesfully');
            return redirect('/admin/subject/create');
    }
}
