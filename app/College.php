<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['College_name','College_nature_id','com_establised','country_id','district_id','College_address','logo','banner','featured_image','website','office_contact','contact_person','mobile','user_id','status','College_type','College_profile','views','uName','pWord'];
}
