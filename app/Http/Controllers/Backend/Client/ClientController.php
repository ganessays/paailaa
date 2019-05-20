<?php

namespace App\Http\Controllers\Backend\Client;

use App\Client;
use App\CompanyNature;
use App\Country;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        return view('backend.client.dashboard',compact('client'));
    }
    public function profile(){
        $title ='Profile Manage';
        $CollegeData =Client::firstOrNew(['user_id'=>Auth::user()->id]);
        $Nature =CompanyNature::all();
        $Country =Country::all();
        $District =District::all();
        return view('backend.client.pages.profile',compact('title','CollegeData','Nature','Country','District'));
    }

    Public function update(Request $request){
        $this->validate($request,[
            'College_name' => 'required',
            'College_type' => 'required',
            'district_id' => 'required',
        ]);
        $college = Client::firstOrNew(['user_id'=>Auth::user()->id]);
        $college->company_name = $request->College_name;
        $college->company_nature_id = $request->College_nature_id;
        $college->district_id = $request->district_id;
        $college->address = $request->College_address;
        $college->website = $request->website;
        $college->office_contact = $request->office_contact;
        $college->mobile = $request->mobile;
        $college->status = $request->status;
        $college->company_type = $request->College_type;
        $college->com_establised = $request->com_establised;
        $college->contact_person = $request->contact_person;
        $college->company_profile = $request->College_profile;
        if ($request->hasFile('logo')) {
            if (is_file(public_path('public/frontend/images/uploads/college/logo').'/'.$college->image) && file_exists(public_path('public/frontend/images/uploads/college/logo').'/'.$college->image)){
                unlink(public_path('public/frontend/images/uploads/college/logo').'/'.$college->image);
            }
            $filename = time() . '.' . request()->file('logo')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;

            request()->file('logo')->move('public/frontend/images/uploads/college/logo', $filename);
            $college->logo = $filename;
        }
        if ($request->hasFile('featured_image')) {
            if (is_file(public_path('public/frontend/images/uploads/college/feature').'/'.$college->image) && file_exists(public_path('public/frontend/images/uploads/college/feature').'/'.$college->image)){
                unlink(public_path('public/frontend/images/uploads/college/feature').'/'.$college->image);
            }
            $filename = time() . '.' . request()->file('featured_image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('featured_image')->move('public/frontend/images/uploads/college/feature', $filename);
            $college->featured_image = $filename;
        }

        if ($request->hasFile('banner')) {
            if (is_file(public_path('public/frontend/images/uploads/college/banner').'/'.$college->image) && file_exists(public_path('public/frontend/images/uploads/college/banner').'/'.$college->image)){
                unlink(public_path('public/frontend/images/uploads/college/banner').'/'.$college->image);
            }
            $filename = time() . '.' . request()->file('banner')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('banner')->move('public/frontend/images/uploads/college/banner', $filename);
            $college->banner = $filename;
        }
        $college->save();

        return redirect('client/profile')->with('success', 'Profile Update Successfully !');

    }


    public function highlights(){
    $title ='Profile Manage';
    return view('backend.client.pages.highlights',compact('title'));

    }

}
