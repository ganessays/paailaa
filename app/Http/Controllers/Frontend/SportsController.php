<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportsController extends Controller
{
    public function sports (){
        $title = 'Sports';
        return view('frontend.pages.allpage.sports',compact('title'));
    }
}
