<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
    public function event(){
        return $this->belongsTo(Event::class,'event_id');
    }

}
