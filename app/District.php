<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=[
        'name','user_id','state_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }
}
