<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollageProfileController extends Controller
{
    public function collage_info(){
        $title = 'College Info | Paailaa';
        return view('frontend.pages.profile.pages.collage_info',compact('title'));
    }
    public function course_fee(){
        $title = 'College Info | Paailaa';
        return view('frontend.pages.profile.pages.course_fee',compact('title'));
    }
    public function results(){
        $title = 'Results | Paailaa';
        return view('frontend.pages.profile.pages.results',compact('title'));
    }
    public function faculty(){
        $title = 'Results | Paailaa';
        return view('frontend.pages.profile.pages.faculty',compact('title'));
    }
    public function collage_profile(){
        $title = 'College Profile | Paailaa';
        return view('frontend.pages.profile.pages.collage_profile',compact('title'));
    }
    public function collage_gallery(){
        $title = 'College gallery | Paailaa';
        return view('frontend.pages.profile.pages.collage_gallery',compact('title'));
    }
    public function collage_admission(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.collage_admission',compact('title'));
    }
    public function news_articles(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.news_articles',compact('title'));
    }
    public function scholarship(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.scholarship',compact('title'));
    }
    public function placement(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.placement',compact('title'));
    }
    public function department(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.placement',compact('title'));
    }
    public function review(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.review',compact('title'));
    }
    public function hostel(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.hostel',compact('title'));
    }
}
