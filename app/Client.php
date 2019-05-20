<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
        'company_name','company_nature_id','com_establised','district_id','address','logo','banner','featured_image','website','office_contact','contact_person','mobile','user_id','status','company_type','company_profile','views','uName','pWord'
            ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
