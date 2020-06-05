<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function schedule(){
        
            return $this->hasMany('App\schedule', 'sub_id', 'id');
    }   
    
}
