<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Events;

use App\Country;
use App\Event;
use App\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function create(){
        $title = 'Paailaa Events';
        $country = Country::all();
        $eventType = EventType::all();
        return view('backend.superadmin.events.create',compact('title','country','eventType'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $event = New Event();
        $event->name = $request->name;
        $event->slug = str_slug($request->name);
        $event->country_id = $request->country_id;
        $event->venue = $request->venue;
        $event->start_at = $request->start_at;
        $event->end_at = $request->end_at;
        $event->event_type_id = $request->event_type_id;
        $event->status = $request->status;
        $event->price = $request->price;
        $event->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/event', $filename);
            $event->image = $filename;
        }
        $event->save();
        return redirect('superadmin/list-event')->with('success','New Events Create Successfully |');
    }


    public function list(){
        $title = 'List Events | Paailaa';
        $event =Event::all();
        return view('backend.superadmin.events.list',compact('event','title'));
    }
    public function edit($slug){
        $title = 'Edit Events | Paailaa';
        $events = Event::where('slug',$slug)->firstOrFail();
        $eventTypes = EventType::all();
        $country =Country::orderBy('name')->get();
        return view('backend.superadmin.events.edit',compact('events','title','eventTypes','country'));

    }
     public function update_event(Request $request,$slug){
        $this->validate($request,[
           'name'=>'required',
        ]);

         $event = Event::where('slug',$slug)->firstOrFail();
         $event->name = $request->name;
         $event->slug = str_slug($request->name);
         $event->country_id = $request->country_id;
         $event->venue = $request->venue;
         $event->start_at = $request->start_at;
         $event->end_at = $request->end_at;
         $event->event_type_id = $request->event_type_id;
         $event->status = $request->status;
         $event->price = $request->price;
         $event->detail = $request->detail;
         if ($request->hasFile('image')) {
             if (is_file(public_path('frontend/images/uploads/event/').'/'.$event->image) && file_exists(public_path('frontend/images/uploads/event/').'/'.$event->image)){
                 unlink(public_path('frontend/images/uploads/event/').'/'.$event->image);
             }
             $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
             $filename = md5(microtime()) . '.' . $filename;

             request()->file('image')->move('public/frontend/images/uploads/event', $filename);
             $event->image = $filename;
         }
         $event->save();
         return redirect('superadmin/list-event')->with('success','Events Updated Successfully |');

     }

    public function delete($slug){
        $event = Event::where('slug',$slug);
        if (is_file(public_path('frontend/images/uploads/event/').'/'.$event->image) && file_exists(public_path('frontend/images/uploads/event/').'/'.$event->image)){
            unlink(public_path('frontend/images/uploads/event/').'/'.$event->image);
        }

        $event->delete();

        return redirect('superadmin/list-event');
    }

}
