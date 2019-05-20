<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function faculty(){
        return $this->belongsTo(Faculty::class,'faculty_id');
    }

}
