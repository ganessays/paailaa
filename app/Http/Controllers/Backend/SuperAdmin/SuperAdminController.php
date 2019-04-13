<?php

namespace App\Http\Controllers\Backend\SuperAdmin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
   public function index(){
       $SuperAdmin = User::where('role_id','1')->orderBy('id','ASC')->get();
       $title = 'Super - Admin | Super Admin Panel | Paailaa';
       return view('backend.superadmin.dashboard',compact('SuperAdmin','title'));
   }
}
