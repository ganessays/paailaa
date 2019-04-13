<?php

namespace App\Http\Controllers\Backend\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $Admin = User::where('role_id','2')->orderBy('id','DESC')->get();
        $title = 'Admin | Super Admin Panel | Paailaa';
        return view('backend.admin.dashboard',compact('Admin','title'));
    }
}
