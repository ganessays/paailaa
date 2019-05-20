<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use App\ClientCourse;
use App\ClientFacility;
use App\ClientGallery;
use App\ClientGalleryCategory;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollageProfileController extends Controller
{
    public function collage_info(){
        $title = 'College Info | Paailaa';
        return view('frontend.pages.profile.pages.collage_info',compact('title'));
    }
    public function course_fee($UserName){
        $user =User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $courses = ClientCourse::where('client_id',$client->id)->get();
        $post = Post::where('user_id',$client->id)->get();
        $title = 'College Courses | Paailaa';
        return view('frontend.pages.profile.pages.course_fee',compact('title','courses','client','post'));
    }
    public function results(){
        $title = 'Results | Paailaa';
        return view('frontend.pages.profile.pages.results',compact('title'));
    }
    public function faculty($UserName){
        $title = 'Results | Paailaa';
        $user =User::where('name',$UserName)->firstOrFail();
        $client = Client::where('user_id',$user->id)->firstOrFail();
        $facility = ClientFacility::where('client_id',$client->id)->get();
        $post = Post::where('user_id',$client->id)->get();
        return view('frontend.pages.profile.pages.faculty',compact('title','facility','post','client'));
    }
    public function facility($UserName){
        $title = 'Facility | Paailaa';
        $user =User::where('name',$UserName)->firstOrFail();
        $client = Client::where('user_id',$user->id)->firstOrFail();
        $facility = ClientFacility::where('client_id',$client->id)->get();
        $post = Post::where('user_id',$client->id)->get();
        return view('frontend.pages.profile.pages.facility',compact('title','facility','client','user','post'));
    }
    public function collage_profile(){
        $title = 'College Profile | Paailaa';
        return view('frontend.pages.profile.pages.collage_profile',compact('title'));
    }
    public function gallery($UserName){
        $title = 'College gallery | Paailaa';
        $user =User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $post = Post::where('user_id',$client->id)->get();
        $gallery = ClientGallery::all();
        return view('frontend.pages.profile.pages.collage_gallery',compact('title','user','client','gallery','client_cat_gallery','post'));
    }
    public function collage_admission(){
        $title = 'College Admission | Paailaa';
        return view('frontend.pages.profile.pages.collage_admission',compact('title'));
    }
    public function news_articles($UserName){
        $title = 'News & Article | Paailaa';
        $user =User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $post = Post::where('user_id',$client->id)->get();
        return view('frontend.pages.profile.pages.news_articles',compact('title','client','post'));
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
    public function news_articles_details($UserName,$slug){
        $title = 'News & Article | Paailaa';
        $user =User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $post = Post::where('user_id',$client->id)->get();
        $post_d = Post::where('slug',$slug)->firstOrFail();
        return view('frontend.pages.profile.pages.news_articles_details',compact('title','client','post','post_d'));
    }

}
