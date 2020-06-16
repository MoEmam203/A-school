<?php

namespace App\Http\Controllers;

use App\subject;
use App\schedule;
use App\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
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
            
            return view('parent.studyTable', [
                's1' => $s1,
                's2' => $s2,
                's3' => $s3,
                's4' => $s4,
                's5' => $s5,
                's6' => $s6,           
                ]);
        }
        $s = schedule::where('level', Auth()->User()->level)->get();   
        $s1 = $s->where('day_order',1);
        $s2 = $s->where('day_order', 2);
        $s3 = $s->where('day_order', 3);
        $s4 = $s->where('day_order', 4);
        $s5 = $s->where('day_order', 5);
        $s6 = $s->where('day_order', 6);
        //  dd($s);
        return view('parent.studyTable', [
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's4' => $s4,
            's5' => $s5,
            's6' => $s6,
            ]);
    }


    // Admin 
    
    public function all()
    {
        // Level 1
        $s = schedule::where('level',1)->get();   
        $s1 = $s->where('day_order',1);
        $s2 = $s->where('day_order', 2);
        $s3 = $s->where('day_order', 3);
        $s4 = $s->where('day_order', 4);
        $s5 = $s->where('day_order', 5);
        $s6 = $s->where('day_order', 6);
        

        // Level 2 
        $f = schedule::where('level',2)->get();   
        $f1 = $f->where('day_order',1);
        $f2 = $f->where('day_order', 2);
        $f3 = $f->where('day_order', 3);
        $f4 = $f->where('day_order', 4);
        $f5 = $f->where('day_order', 5);
        $f6 = $f->where('day_order', 6);

        // Level 3
        $a = schedule::where('level',3)->get();   
        $a1 = $a->where('day_order',1);
        $a2 = $a->where('day_order', 2);
        $a3 = $a->where('day_order', 3);
        $a4 = $a->where('day_order', 4);
        $a5 = $a->where('day_order', 5);
        $a6 = $a->where('day_order', 6);

        // Level 4
        $b = schedule::where('level', 4)->get();
        $b1 = $b->where('day_order', 1);
        $b2 = $b->where('day_order', 2);
        $b3 = $b->where('day_order', 3);
        $b4 = $b->where('day_order', 4);
        $b5 = $b->where('day_order', 5);
        $b6 = $b->where('day_order', 6);


        // Level 5
        $c = schedule::where('level', 5)->get();
        $c1 = $c->where('day_order', 1);
        $c2 = $c->where('day_order', 2);
        $c3 = $c->where('day_order', 3);
        $c4 = $c->where('day_order', 4);
        $c5 = $c->where('day_order', 5);
        $c6 = $c->where('day_order', 6);

        // Level 6
        $z = schedule::where('level', 6)->get();
        $z1 = $z->where('day_order', 1);
        $z2 = $z->where('day_order', 2);
        $z3 = $z->where('day_order', 3);
        $z4 = $z->where('day_order', 4);
        $z5 = $z->where('day_order', 5);
        $z6 = $z->where('day_order', 6);



        return view('admin.schedules.allschedules', [
           
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's4' => $s4,
            's5' => $s5,
            's6' => $s6,

           
            'f1' => $f1,
            'f2' => $f2,
            'f3' => $f3,
            'f4' => $f4,
            'f5' => $f5,
            'f6' => $f6,

           
            'a1' => $a1,
            'a2' => $a2,
            'a3' => $a3,
            'a4' => $a4,
            'a5' => $a5,
            'a6' => $a6,

            'b1' => $b1,
            'b2' => $b2,
            'b3' => $b3,
            'b4' => $b4,
            'b5' => $b5,
            'b6' => $b6,

            
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
            'c4' => $c4,
            'c5' => $c5,
            'c6' => $c6,

           
            'z1' => $z1,
            'z2' => $z2,
            'z3' => $z3,
            'z4' => $z4,
            'z5' => $z5,
            'z6' => $z6,

            ]);

       
    }

    public function create()
    {
        $s = subject::all()->sortBy('level');
        return view('admin.schedules.addschedule',['s'=>$s]);
    }

    public function store()
    {
        request()->validate([
            'day_order' => 'required',
            'class_order' => 'required',
            'sub_id' => 'nullable',
            // 'e_id' => 'nullable',
            'level' => 'required',
            'type' => 'required'
        ]);

        $sch = new schedule();
        
        $sch->day_order = request('day_order');
        $sch->class_order = request('class_order');
        $sch->sub_id = request('sub_id');
        // $sch->e_id = request('e_id');
        $sch->level = request('level');
        $sch->type = request('type');

        $sch->save();
        Session()->flash('success', 'schedule saved succesfully');
        return redirect('/admin/schedule/create');
    }

    public function alledit(){
        // $ss = subject::all();
        $s =schedule::all()->sortBy('level');
        // $s = $s->sortBy('day_order');
        // $s = $s->sortBy('class_order');
        return view ('admin.schedules.alledit',['s'=>$s]);
    }


    public function edit($id)
    {
        $sch = schedule::find($id);
        $s = subject::all()->sortBy('level');
        return view('admin.schedules.editschedule', ['sch' => $sch,'s'=>$s]);
    }

    public function update($id)
    {
        request()->validate([
            'day_order' => 'required',
            'class_order' => 'required',
            'sub_id' => 'nullable',
            // 'e_id' => 'nullable',
            'level' => 'required',
            'type' => 'required'
        ]);

        $sch = schedule::find($id);

        $sch->day_order = request('day_order');
        $sch->class_order = request('class_order');
        $sch->sub_id = request('sub_id');
        // $sch->e_id = request('e_id');
        $sch->level = request('level');
        $sch->type = request('type');

        $sch->save();
        Session()->flash('success', 'schedule updated succesfully');
        return redirect('/admin/schedules/all');
    }


    public function destroy($id)
    {
        schedule::find($id)->delete();
        Session()->flash('success', 'Schedule deleted succesfully');
        return redirect()->back();
    }
    

}
