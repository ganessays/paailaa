<?php

namespace App\Http\Controllers\Backend\Client;

use App\Client;
use App\ClientCourse;
use App\Course;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function create(){
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $Courses =Course::orderBy('name','ASC')->get();
        $faculty =Faculty::all();
        $title ='Profile Manage';
        return view('backend.client.pages.course.courses_fees',compact('title','Courses','client','faculty'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'course_id'=>'required',
        ]);
        $client=Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client_course =new ClientCourse();
        $client_course->client_id =$client->id;
        $client_course->course_id =$request->course_id;
        $client_course->duration =$request->duration;
        $client_course->course_fee =$request->course_fee;
        $client_course->detail =$request->detail;
        $client_course->views =0;
        $client_course->save();
        return redirect('client/courses-list')->with('success','Course Details added successfully!!');
    }
    public function list_courses(){
        $client=Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client_course = ClientCourse::where('client_id',$client->id)->get();
        return view('backend.client.pages.course.courses_list',compact('client','client_course'));
    }
    public function edit($id){
        $Courses = Course::all();
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client_course =ClientCourse::findOrFail($id);
        return view('backend.client.pages.course.courses_edit',compact('client_course','client','Courses'));


    }

    public function update(Request $request,$id){
        $client_course =ClientCourse::findOrFail($id);
        $client_course->course_id =$request->course_id;
        $client_course->duration =$request->duration;
        $client_course->course_fee =$request->course_fee;
        $client_course->detail =$request->detail;
        $client_course->save();
        return redirect('client/courses-list')->with('success','Course Details Updated successfully!!');
    }
}
