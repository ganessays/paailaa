<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientFacility extends Model
{
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function facility(){
        return $this->belongsTo(Facility::class,'facility_id');
    }

}
