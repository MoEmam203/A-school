<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    public function subject(){
        return $this->hasMany('App\subject');
    }
}
