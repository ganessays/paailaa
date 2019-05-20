<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function client_faculty(){
        return $this->hasMany(ClientFaculty::class,'faculty_id');
    }
}
