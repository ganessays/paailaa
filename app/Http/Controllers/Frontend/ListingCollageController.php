<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingCollageController extends Controller
{
   public function list_collage(){
       $title ="List Collage";
       $AllCollege = Client::where('status','active')->get();
       return view('frontend/list_collage',compact('title','AllCollege'));
   }
   public function list_consultancy(){
       $title ="List of Consultancy";
       $AllConsultancy = Client::where('company_nature_id',3)->where('status','active')->get();
       return view('frontend/list_consultancy',compact('title','AllConsultancy'));
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
