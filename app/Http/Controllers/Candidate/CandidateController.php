<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Candidate;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index(){
        $candidate = Candidate::where('user_id',Auth::user()->id)->firstOrFail();
        if(isset($candidate->first_name) && isset($candidate->last_name) && $candidate->status==2){
            $title ='Candidate | Admin Panel';
            return view('backend.candidate.dashboard' ,compact('title','candidate'));
        }else{
            return redirect('candidate/personal-profile')->with('error','Complete your profile first');
        }
    }
    public function personal_profile(){
        $candidate = Candidate::where('user_id',Auth::user()->id)->firstOrFail();
        $title ='Candidate Profile| Candidate Panel';
        return view('backend.candidate.pages.profile.update_profile' ,compact('title','candidate'));
    }
}
