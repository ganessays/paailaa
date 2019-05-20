<?php

namespace App\Http\Controllers\Backend\SuperAdmin\Directory;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function list_school(){
        $consultancy =Client::where('company_nature_id',5)->get();
        return view('backend.superadmin.directory.our_client.list_school',compact('consultancy'));
    }

    public function updateClientStatus($id)
    {
        $listClient = Client::findOrFail($id);
        $requestData = \request()->all();
        $listClient->update($requestData);
        return redirect('superadmin/list-consultancy')->with('success', 'Status Updated');
    }
}
