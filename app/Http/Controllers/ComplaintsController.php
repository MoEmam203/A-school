<?php

namespace App\Http\Controllers;
use App\User;
use App\complaint;
use Illuminate\Http\Request;
use Session;

class ComplaintsController extends Controller
{

    public function create()
    {
        return view('parent.ComplaintsAndSuggestions');
    }

    public function store()
    {
        request()->validate([
            'complaints-and-suggestions' => 'required',
            'user_id' => 'required'
        ]);

        $complaint = new Complaint();
        $complaint->content = request('complaints-and-suggestions');
        $complaint->user_id = request('user_id');
        $complaint->save();
        Session()->flash('mssg', 'Massage sent succsefully');
        return redirect('complaints');
    }

    
}
