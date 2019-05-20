<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientFaculty extends Model
{
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class,'faculty_id');
    }
}
