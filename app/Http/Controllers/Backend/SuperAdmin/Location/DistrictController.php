<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Location;

use App\District;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    public function index(){
        $title='States - Admin-Panel | sajhajob.com';
        $states = State::orderBy('name','ASC')->get();
        $districts = District::orderBy('name','ASC')->get();
        return view('backend.superadmin.location.district',compact('title','states','districts'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:states,name',
            'state_id'=> 'required',
        ]);
        $district = New District();
        $district->name=$request->name;
        $district->state_id = $request->state_id;
        $district->user_id = Auth::user()->id;
        $district->save();
        return redirect()->back()->with('success','District Name Created Successfully');
    }
    public function edit($id){
        $title = 'Edit District Name - Admin-Panel | sajhajob.com';
        $district = District::findOrFail($id);
        $states = State::orderBy('name','ASC')->get();
        return view('backend.superadmin.location.edit_district',compact('title','states','district'));
    }
    public function update(Request $request,$id){
//        $this->validate($request, [
//            'name'=> 'required|unique:states,name',
//            'country_id'=> 'required',
//        ]);
        $district = District::findOrFail($id);
        $district->name=$request->name;
        $district->state_id = $request->state_id;
        $district->user_id = Auth::user()->id;
        $district->save();

        return redirect('superadmin/district')->with('success','District Name Updated Successfully !!');

    }

}
