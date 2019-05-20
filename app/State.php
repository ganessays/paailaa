<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['name','country_id','user_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
