<?php

namespace App\Http\Controllers\Backend\SuperAdmin\FacultyCourses;

use App\Course;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function create(){
        $FacultyData =Faculty::orderBy('name','ASC')->get();
        $CoursesData = Course::orderBy('name','ASC')->get();
        return view('backend.superadmin.courses.create',compact('FacultyData','CoursesData'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:courses,name',
            'faculty_id'=>'required',
        ]);
        $courses =New Course();
        $courses->name = $request->name;
        $courses->faculty_id =$request->faculty_id;
        $courses->save();
        return redirect('superadmin/add-courses');
    }

    public function edit($id){
//        $FacultyData =Faculty::orderBy('name','ASC')->get();
        $CoursesData = Course::findOrFail($id);
        $courses = Course::findOrFail($id);
        $faculty = Faculty::orderBy('name','ASC')->get();
        return view('backend.superadmin.courses.edit',compact('courses','faculty','CoursesData'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|unique:courses,name',
            'faculty_id'=>'required',
        ]);
        $courses =Course::findOrFail($id);
        $courses->name = $request->name;
        $courses->faculty_id =$request->faculty_id;
        $courses->save();

        return redirect('superadmin/add-courses')->with('success','courses updated ');
    }
}
