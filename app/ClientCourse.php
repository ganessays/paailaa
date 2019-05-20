<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientCourse extends Model
{
    //
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
