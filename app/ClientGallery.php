<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientGallery extends Model
{
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function client_gallery_cat(){
        return $this->belongsTo(ClientGalleryCategory::class,'cat_id');
    }
}
