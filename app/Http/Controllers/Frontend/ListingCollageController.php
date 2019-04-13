<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingCollageController extends Controller
{
   public function list_collage(){
       $title ="List Collage";
       return view('frontend/list_collage',compact('title'));
   }
    public function contact_us(){
        $title ="About Us - Paailaa";
        return view('frontend/contact_us',compact('title'));
    }
    public function news(){
        $title ="News Paailaa";
        return view('frontend/news',compact('title'));
    }
}
