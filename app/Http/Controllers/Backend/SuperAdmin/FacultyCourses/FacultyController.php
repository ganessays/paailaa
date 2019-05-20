<?php

namespace App\Http\Controllers\Backend\SuperAdmin\FacultyCourses;

use App\Client;
use App\ClientFaculty;
use App\Facility;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\New_;

class FacultyController extends Controller
{
    public function create(){
        $FacultyData =Faculty::all();
        return view('backend.superadmin.faculty.create',compact('FacultyData'));
    }
    public  function store(Request $request){
        $this->validate($request,[
            'name'=> 'required|unique:faculties,name',
            'slug'=> 'unique:faculties,slug',
        ]);
        $faculty = new Faculty();
        $faculty->name = $request->name;
        $faculty->short = $request->short;
        $faculty->slug =str_slug($request->name);
        $faculty->description = $request->description;
        $faculty->save();
        return redirect('superadmin/add-faculty')->with('success',' New Faculty add');
    }

    public function edit($id){
        $FacultyData =Faculty::all();
        $faculty = Faculty::findOrFail($id);
        return view('backend.superadmin.faculty.edit',compact('faculty','FacultyData'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=> 'required|unique:faculties,name',
            'slug'=> 'unique:faculties,slug',
        ]);
        $faculty = Faculty::findOrFail($id);
        $faculty->name = $request->name;
        $faculty->short = $request->short;
        $faculty->slug =str_slug($request->name);
        $faculty->description = $request->description;
        $faculty->save();
        return redirect('superadmin/add-faculty')->with('success','Faculty Update');
    }


    public function client_faculty(){
        $title = 'Client Faculty';
        $faculties = Faculty::all();
        $clients = Client::all();
        $clientFaculties =ClientFaculty::all();
        return view('backend.superadmin.faculty.client_faculty',compact('title','faculties','clients','clientFaculties'));
        }

        public function post_client_faculty(Request $request){
        $this->validate($request,[
           'client_id'=>'required',
           'faculty_id'=>'required'
        ]);
            $client_id = $request->client_id;
            $faculty_id = $request->faculty_id;
            $posted = ClientFaculty::where('client_id',$client_id)->where('faculty_id',$faculty_id)->get();
            if (count($posted)>0){
                return redirect()->back()->with('error-msg','Already Created');
            }else{
                $clientFaculties = new ClientFaculty();
                $clientFaculties->client_id =$request->client_id;
                $clientFaculties->faculty_id =$request->faculty_id;
                $clientFaculties->save();
                return redirect()->back()->with('success','ok done !');
            }
            }

}
