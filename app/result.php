<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    public function subject()
    {


        return $this->belongsTo('App\subject', 'sub_id', 'id');
    }
}
