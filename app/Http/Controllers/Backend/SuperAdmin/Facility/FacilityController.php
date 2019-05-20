<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Facility;

use App\Facility;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    Public function index(){
        $title = 'Add Facility | Paailaa';
        $facility = Facility::all();
        return view('backend.superadmin.facility.index',compact('title','facility'));
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=> 'required|unique:facilities,name',
        ]);
        $facility = new Facility();
        $facility->name =$request->name;
        $facility->icon = $request->icon;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/facility/images', $filename);
            $facility->image = $filename;
        }
        $facility->save();
        return redirect('superadmin/add-facility')->with('success','New Facility Create');

    }

    public function list(){
        $title = 'Facility List | Paailaa';
        $facility = Facility::all();
        return view('backend.superadmin.facility.list',compact('title','facility'));
    }

    public function edit($id){
        $title = 'Edit Facility | Paailaa';
        $facility = Facility::findOrFail($id);
        return view('backend.superadmin.facility.edit',compact('title','facility'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
        ]);

        $facility = Facility::findOrFail($id);
        $facility->name =$request->name;
        $facility->icon = $request->icon;
        if ($request->hasFile('image')) {
            if (is_file(public_path('frontend/images/uploads/facility/images').'/'.$facility->image) && file_exists(public_path('frontend/images/uploads/facility/images').'/'.$facility->image)) {
                unlink(public_path('frontend/images/uploads/facility/images') . '/' . $facility->image);
            }
            $filename = time() . '.' . request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/frontend/images/uploads/facility/images', $filename);
            $facility->image = $filename;
        }
        $facility->save();
        return redirect('superadmin/add-facility')->with('success','New Post Update');


    }

}
