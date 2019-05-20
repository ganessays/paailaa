<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Directory;

use App\Client;
use App\CompanyNature;
use App\Country;
use App\District;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DirectoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $Country = Country::all();
            $Nature = CompanyNature::all();
            $District = District::all();
            return view('backend.superadmin.directory.our_client.index', compact('Country', 'District', 'Nature'));
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
            $email = $userName . '@paailaa.com';
            //        creating user
            $user = New User();
            $user->name = $userName;
            $user->email = $email;
            $user->role_id = 4;
            $user->password = Hash::make($password);
            if ($user->save()) {
                //        creating employer
                $college = New Client();
                $college->company_name = $request->College_name;
                $college->slug = str_slug($request->College_name);
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
                $college->user_id = $user->id;
                $college->username = $userName;
                $college->pWord = $password;
                $college->views = 0;
                if ($request->hasFile('logo')) {
                    $filename = time() . '.' . request()->file('logo')->getClientOriginalExtension();
                    $filename = md5(microtime()) . '.' . $filename;

                    request()->file('logo')->move('public/frontend/images/uploads/college/logo', $filename);
                    $college->logo = $filename;
                }
                if ($request->hasFile('featured_image')) {
                    $filename = time() . '.' . request()->file('featured_image')->getClientOriginalExtension();

                    $filename = md5(microtime()) . '.' . $filename;

                    request()->file('featured_image')->move('public/frontend/images/uploads/college/feature', $filename);
                    $college->featured_image = $filename;
                }

                if ($request->hasFile('banner')) {
                    $filename = time() . '.' . request()->file('banner')->getClientOriginalExtension();

                    $filename = md5(microtime()) . '.' . $filename;

                    request()->file('banner')->move('public/frontend/images/uploads/college/banner', $filename);
                    $college->banner = $filename;
                }
                $college->save();
                if ($college->company_nature_id==1){
                    return redirect('superadmin/list-college')->with('success', 'College Created Successfully !');
                }
                elseif($college->company_nature_id==2){
                    return redirect('superadmin/list-university')->with('success', 'University Created Successfully !');
                }
                elseif($college->company_nature_id==3){
                    return redirect('superadmin/list-consultancy')->with('success', 'Consultancy Created Successfully !');
                }
                elseif($college->company_nature_id==4){
                    return redirect('superadmin/list-institute')->with('success', 'Institute Created Successfully !');
                }
                elseif($college->company_nature_id==5){
                    return redirect('superadmin/list-school')->with('success', 'School Created Successfully !');
                }
            }
        }
    }

    public function list(){
        $CollegeData =Client::where('company_nature_id',1)->get();
        return view('backend.superadmin.directory.our_client.list',compact('CollegeData'));
    }
    public function edit($id){
        $Nature =CompanyNature::all();
        $country =Country::all();
        $CollegeData = Client::findOrFail($id);
        $District =District::all();
        return view('backend.superadmin.directory.our_client.edit',compact('Nature','CollegeData','country','District'));
    }

    Public function update(Request $request,$id){
        $this->validate($request,[
            'College_name' => 'required',
            'College_type' => 'required',
            'district_id' => 'required',
        ]);
        $college = Client::findOrFail($id);
        $college->company_name = $request->College_name;
        $college->slug = str_slug($request->College_name);
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
            if (is_file(public_path('public/frontend/images/uploads/college/featured_image').'/'.$college->image) && file_exists(public_path('public/frontend/images/uploads/college/featured_image').'/'.$college->image)){
                unlink(public_path('public/frontend/images/uploads/college/featured_image').'/'.$college->image);
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
        if ($college->company_nature_id==1){
            return redirect('superadmin/list-college')->with('success', 'College Updated Successfully !');
        }
        elseif($college->company_nature_id==2){
            return redirect('superadmin/list-university')->with('success', 'University Updated Successfully !');
        }
        elseif($college->company_nature_id==3){
            return redirect('superadmin/list-consultancy')->with('success', 'Consultancy Updated Successfully !');
        }
        elseif($college->company_nature_id==4){
            return redirect('superadmin/list-institute')->with('success', 'Institute Updated Successfully !');
        }
        elseif($college->company_nature_id==5){
            return redirect('superadmin/list-school')->with('success', 'School Updated Successfully !');
        }


        return redirect('superadmin/list-college')->with('success', 'College Update Successfully !');

    }

    public function updateClientStatus($id)
    {
        $listClient = Client::findOrFail($id);
        $requestData = \request()->all();
        $listClient->update($requestData);
        return redirect('superadmin/list-college')->with('success', 'Status Updated');
    }
}


