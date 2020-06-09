<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamSchedule extends Model
{
    public function examSubject()
    {
        return $this->belongsTo('App\subject', 'sub_id', 'id');
    }
}
