<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Location;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    public function index(){
        $title='Country - Admin-Panel | sajhajob.com';
        $countries = Country::orderBy('name','ASC')->get();
        return view('backend.superadmin.location.country',compact('title','countries'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:countries,name',
        ]);
        $country = New Country();
        $country->name=$request->name;
        $country->user_id = Auth::user()->id;
        $country->save();
        return redirect()->back()->with('success','New Country Created Successfully');
    }
    public function edit($id){
        $title = 'Edit Country Name - Admin-Panel | sajhajob.com';
        $country = Country::findOrFail($id);
        return view('backend.superadmin.location.edit_country',compact('title','country'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:countries,name',
        ]);
        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->user_id = Auth::user()->id;
        $country->save();

        return redirect('superadmin/add-country')->with('success','Country Name Updated Successfully !!');

    }

}
