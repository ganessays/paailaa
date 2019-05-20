<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use App\ClientCourse;
use App\ClientFacility;
use App\Event;
use App\Faculty;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Candidate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
    	$title = 'Best Educational Paailaa';
        $TopCollege = Client::where('company_type','featured')->where('company_nature_id',1)->where('status','active')->get();
        $TopConsultancy = Client::where('company_type','featured')->where('company_nature_id',3)->where('status','active')->limit(8)->get();
        $faculty = Faculty::all();
        $news = Post::all();
        $event =Event::where('status','publish')->where('end_at','>=',date('Y-m-d'))->orderBy('start_at','ASC')->get();
        $pastEvent =Event::where('status','publish')->where('end_at','<=',date('Y-m-d'))->orderBy('start_at','ASC')->get();
        return view('frontend.index',compact('title','TopCollege','TopConsultancy','faculty','news','event','pastEvent'));
    }

    public function overview($UserName){
        $user =User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $courses = ClientCourse::where('client_id',$client->id)->get();
        $post = Post::where('user_id',$client->id)->get();
        return view('frontend.pages.profile.pages.collage_info',compact('title','client','user','courses','post'));
    }

    public function news(){
        $title ='News';
        return view('frontend.news');
    }

    public function getlogin(){
        if(Auth::check()){
            if (Auth::user()->role_id == 1) {
                return redirect('superadmin');
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
                    return redirect('superadmin');
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
