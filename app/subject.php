<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function schedule(){

        
            return $this->hasMany('App\schedule', 'sub_id', 'id');
    }

    public function examSchedule()
    {


        return $this->hasMany('App\ExamSchedule', 'sub_id', 'id');
    }
    

}
