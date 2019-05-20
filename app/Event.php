<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
    public function event_type(){
        return $this->belongsTo(EventType::class,'event_type_id');
    }
}
