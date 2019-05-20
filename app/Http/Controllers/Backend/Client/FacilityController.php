<?php

namespace App\Http\Controllers\Backend\Client;

use App\Client;
use App\ClientFacility;
use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    public function index(){
        $title='Facilities | Client-Area | Admission Nepal';
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $facilities = ClientFacility::where('client_id',Auth::user()->client->id)->orderBy('id','DESC')->get();
        $facilities_all = Facility::all();
        return view('backend.client.facility.create',compact('title','facilities','facilities_all','client'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'facility_id' => 'required',
        ]);
        $facility_item = $request->facility_id;
        $client_data = Auth::user()->client->id;
        $old_facility = ClientFacility::where('client_id',$client_data)->where('facility_id',$facility_item)->count();
        if ($old_facility>0){
            return redirect('client/facilities')->with('success','Facility Already Added !');
        }else{
            $facilities = New ClientFacility();
            $facilities->facility_id = $request->facility_id;
            $facilities->client_id = Auth::user()->client->id;
            $facilities->save();
            return redirect('client/facilities')->with('success','Facility Added Successfully !');
        }
    }
    public function delete($id){
        $facilities = ClientFacility::findOrFail($id);
        if ($facilities->client_id == Auth::user()->client->id){
            $facilities->delete();
            return redirect('client/facilities')->with('success','Facility Deleted Successfully !');
        }
        else{
            return redirect('client/facilities');
        }

    }

}
