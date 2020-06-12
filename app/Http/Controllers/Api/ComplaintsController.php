<?php

namespace App\Http\Controllers\Api;

use App\complaint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
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
        
        $data='';
        $massage = '';
        $status =500;
        if( $complaint->save()){
            $massage = 'Massage sent successfully';
            $status = 200;
        } else{
            $massage = 'Error in sent Massage';
        }
        return response()->json(['data' => $data, 'massage' => $massage, 'status' => $status]);

     }
}
