<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientGalleryCategory extends Model
{
    protected $fillable=['name','client_id'];
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
