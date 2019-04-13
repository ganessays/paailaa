<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Candidate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
    	$title = 'Best Educational ';
        return view('frontend.index',compact('title'));
    }

    public function getlogin(){
        if(Auth::check()){
            if (Auth::user()->role_id == 1) {
                return redirect('superAdmin');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('admin');
            }
            if (Auth::user()->role_id == 3) {
                return redirect('moderator');
            }
            if (Auth::user()->role_id == 4) {
                return redirect('client');
            }
            if (Auth::user()->role_id == 5) {
                return redirect('candidate');
            }
        }
        $title = 'login - Paailaa';
        return view('frontend.login.login',compact('title'));
    }
    public function postlogin(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('email'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('email'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->role_id == 1) {
                    return redirect('superAdmin');
                }
                if (Auth::user()->role_id == 2) {
                    return redirect('admin');
                }
                if (Auth::user()->role_id == 3) {
                    return redirect('moderator');
                }
                if (Auth::user()->role_id == 4) {
                    return redirect('client');
                }
                if (Auth::user()->role_id == 5) {
                    return redirect('candidate');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }
    public function candidate_signup(Request $request){
        $this->validate(request(),[
            'email'=>'required|unique:users,email',
            'name'=>'required|unique:users,name',
            'first_name'=>'required',
            'password'=>'required|confirmed',
        ]);

        $user=new User();
        $candidate=new Candidate();
        $user->name = request('name');
        $user->email = request('email');
        $user->role_id = 5;
        $user->password = bcrypt(request('password'));
        if($user->save()){
            $candidate->first_name = request('first_name');
            $candidate->user_id = $user->id;
            $candidate->save();
            return redirect('login')->with('success','Congarats');
        }
    }
}
