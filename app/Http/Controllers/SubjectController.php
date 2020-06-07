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
        return view('admin.subjects.allsubjects',["sub"=>$sub]);
    }

    public function create(){
        return view ('admin.subjects.addsubject');
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
            Session()->flash('success', 'Subject saved succesfully');
            return redirect('/admin/subject/create');



        }

    public function edit($id){
        $sub = subject::find($id);
        return view('admin.subjects.editsubject',['sub'=>$sub]);
    }


    public function update( $id)
    {
        request()->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'level' => 'required'
        ]);

        $subject = subject::find($id);

        $subject->code = request('code');
        $subject->name = request('name');
        $subject->description = request('description');
        $subject->level = request('level');

        $subject->save();
        Session()->flash('success', 'Subject saved succesfully');
        return redirect('/admin/subjects');
    }


    public function destroy($id){
        subject::find($id)->delete();
        Session()->flash('success', 'Subject deleted succesfully');
        return redirect()->back();
    }
}
