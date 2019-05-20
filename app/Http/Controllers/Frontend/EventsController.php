<?php

namespace App\Http\Controllers\Frontend;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function events_show(){
       $title = 'Events';
        $event =Event::where('status','publish')->where('end_at','>=',date('Y-m-d'))->orderBy('start_at','ASC')->get();
        $pastEvent =Event::where('status','publish')->where('end_at','<=',date('Y-m-d'))->orderBy('start_at','ASC')->get();
       return view('frontend.pages.allpage.events',compact('event','title','pastEvent'));

    }
}
