<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Directory;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniversityController extends Controller
{
    public function list_university(){
        $consultancy =Client::where('company_nature_id',2)->get();
        return view('backend.superadmin.directory.our_client.list_university',compact('consultancy'));
    }

    public function updateClientStatus($id)
    {
        $listClient = Client::findOrFail($id);
        $requestData = \request()->all();
        $listClient->update($requestData);
        return redirect('superadmin/list-university')->with('success', 'Status Updated');
    }
}
