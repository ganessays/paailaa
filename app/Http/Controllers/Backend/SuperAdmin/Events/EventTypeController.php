<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Events;

use App\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventTypeController extends Controller
{
    public function create(){
        $eventsType = EventType::all();
        return view('backend.superadmin.news_articles.events_type.create',compact('eventsType'));
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=> 'required|unique:event_types,name'
        ]);
        $eventsType =New EventType();
        $eventsType->name =$request->name;
        $eventsType->slug = str_slug($request->name);
        $eventsType->save();
        return redirect('superadmin/add-event-type')->with('success',' New Events Type');
    }
    public function edit($id){
        $title = 'Edit Events Type | Paailaa';
        $eventsType =EventType::findOrFail($id);
        return view('backend.superadmin.news_articles.events_type.edit',compact('eventsType','title'));

    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=> 'required|unique:event_types,name',
        ]);
        $eventsType = EventType::findOrFail($id);
        $eventsType->name =$request->name;
        $eventsType->slug = str_slug($request->name);
        $eventsType->save();
        return redirect('superadmin/add-event-type')->with('success',' Update Events Type');


    }
}
