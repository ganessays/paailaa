<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollageProfileController extends Controller
{
    public function collage_profile(){
        $title = 'Collage Profile | Paailaa';
        return view('frontend.collage_profile',compact('title'));
    }
    public function collage_gallery(){
        $title = 'Collage gallery | Paailaa';
        return view('frontend.collage_gallery',compact('title'));
    }
    public function collage_admission(){
        $title = 'Collage Admission | Paailaa';
        return view('frontend.collage_admission',compact('title'));
    }
}
