<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['user_id','first_name','middle_name','last_name','birth_year','birth_month','birth_day','photo','gender','marital_status','mobile_number','telephone_no','current_address','permanent_address','status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
