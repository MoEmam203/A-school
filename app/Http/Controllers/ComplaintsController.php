<?php

namespace App\Http\Controllers;
use App\User;
use App\complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{

    public function create()
    {
        $user = User::findOrFail(Auth()->User()->id);
        return view('parent.ComplaintsAndSuggestions', ['user', $user]);
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

        return redirect('complaints')->with('mssg', 'Massage sent succsefully');
    }

    
}
