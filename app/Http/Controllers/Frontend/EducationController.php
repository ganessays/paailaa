<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function education_list(){
        $title = 'Education Listing';
        $educations = Client::all();
        return view('frontend.list_education',compact('title','educations'));

    }
}
