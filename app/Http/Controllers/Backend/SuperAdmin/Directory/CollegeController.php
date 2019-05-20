<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Directory;

use App\Client;
use App\College;
use App\CompanyNature;
use App\Country;
use App\District;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CollegeController extends Controller
{
    public function add_college(Request $request){
        if ($request->isMethod('get')) {
            $Country = Country::all();
            $Nature = CompanyNature::all();
            $District = District::all();
            return view('backend.superadmin.directory.college.pages.add_college', compact('Country', 'District', 'Nature'));
        }
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'College_name' => 'required|unique:clients,company_name',
                'name' => 'required|unique:users',
                'College_type' => 'required',
                'country_id' => 'required',
                'district_id' => 'required',
                //'logo'=>'sometimes|nullable|required|file|size:2024|mimes:jpeg,png,jpg,'
                // 'logo'=>'required|file|max:2024|mimes:jpeg,png,jpg,'
            ]);
            $password = (str_random(8));
            $userName = \request('name');
            $email = $userName . '@example.com';
            //        creating user
            $user = New User();
            $user->name = $userName;
            $user->email = $email;
            $user->role_id = 4;
            $user->password = Hash::make($password);
            if ($user->save()){
                //        creating employer
                $college = New Client();
                $college->company_name = $request->College_name;
                $college->company_nature_id = $request->College_nature_id;
                $college->district_id = $request->district_id;
                $college->address	 = $request->College_address;
                $college->website	 = $request->website;
                $college->office_contact	 = $request->office_contact;
                $college->mobile	 = $request->mobile;
                $college->status	 = $request->status;
                $college->company_type	 = $request->College_type;
                $college->com_establised	 = $request->com_establised;
                $college->contact_person	 = $request->contact_person;
                $college->company_profile	 = $request->College_profile;
                $college->user_id	 = $user->id;
                $college->username	 = $userName;
                $college->pWord	 = $password;
                if ($request->hasFile('logo')){
                $filename = time().'.'.request()->file('logo')->getClientOriginalExtension();
                $filename = md5(microtime()) . '.' . $filename;

                request()->file('logo')->move('public/frontend/images/uploads/college/logo',$filename);
                    $college->logo =$filename;
            }
            if ($request->hasFile('featured_image')){
                $filename = time().'.'.request()->file('featured_image')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('featured_image')->move('public/frontend/images/uploads/college/feature',$filename);
                $college->featured_image =$filename;
            }

            if ($request->hasFile('banner')){
                $filename = time().'.'.request()->file('banner')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('banner')->move('public/frontend/images/uploads/college/banner',$filename);
                $college->banner =$filename;
            }
            $college->save();
                return redirect('superadmin/list-college')->with('success','College Created Successfully !');
            }
            }
    }

    public function list_college(){
        $CollegeData =Client::all();
        return view('backend.superadmin.directory.college.pages.list_college',compact('CollegeData'));
    }
      public function edit_college($id){
          $Nature =CompanyNature::all();
          $country =Country::all();
          $CollegeData = Client::findOrFail($id);
          $District =District::all();
        return view('backend.superadmin.directory.college.pages.edit_college',compact('Nature','CollegeData','country','District'));
    }

}
