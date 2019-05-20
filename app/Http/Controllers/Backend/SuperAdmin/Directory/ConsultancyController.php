<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Directory;

use App\Client;
use App\CompanyNature;
use App\Country;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultancyController extends Controller
{
    public function list_consultancy(){
        $consultancy =Client::where('company_nature_id',3)->get();
        return view('backend.superadmin.directory.our_client.list_consultancy',compact('consultancy'));
    }
    public function edit($id){
        $Nature =CompanyNature::all();
        $country =Country::all();
        $CollegeData = Client::findOrFail($id);
        $District =District::all();
        return view('backend.superadmin.directory.our_client.edit',compact('Nature','CollegeData','country','District'));
    }

    public function updateClientStatus($id)
    {
        $listClient = Client::findOrFail($id);
        $requestData = \request()->all();
        $listClient->update($requestData);
        return redirect('superadmin/list-consultancy')->with('success', 'Status Updated');
    }
}
