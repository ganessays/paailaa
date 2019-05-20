<?php

namespace App\Http\Controllers\Backend\Client;

use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function index(){
        $title ='Faculty';
        $faculty =Faculty::all();
        return view('backend.client.pages.faculty.index',compact('title','faculty','client'));
    }
}
