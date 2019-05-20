<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
    public function tag(){
        return $this->belongsTo(Tag::class,'tag_id');
    }
}
