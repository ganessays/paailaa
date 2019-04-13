@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                   <div class="collage_news_article_list">
                       <h2>EXAM NEWS AND ARTICLES</h2>
                       <hr>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="collage_ne_ar_list">
                                   <img src="{{url('public/frontend/images/uploads/newsarticle/topcollage.jpg')}}" alt="">
                                   <span>Date {{date('Y,m,d')}}</span> <span class="pull-right"><i class="fa fa-eye"></i></span>
                                       <p><a href="#">
                                           National Law School (NLSIU) Bangalore M.Phil, Ph.D and LL.D Admissions 2019: Courses, Placement, Fees
                                       </a></p>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="collage_ne_ar_list">
                                   <img src="{{url('public/frontend/images/uploads/newsarticle/topcollage.jpg')}}" alt="">
                                   <span>Date {{date('Y,m,d')}}</span> <span class="pull-right"><i class="fa fa-eye"></i></span>
                                   <p><a href="#">
                                           National Law School (NLSIU) Bangalore M.Phil, Ph.D and LL.D Admissions 2019: Courses, Placement, Fees
                                       </a></p>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="collage_ne_ar_list">
                                   <img src="{{url('public/frontend/images/uploads/newsarticle/topcollage.jpg')}}" alt="">
                                   <span>Date {{date('Y,m,d')}}</span> <span class="pull-right"><i class="fa fa-eye"></i></span>
                                   <p><a href="#">
                                           National Law School (NLSIU) Bangalore M.Phil, Ph.D and LL.D Admissions 2019: Courses, Placement, Fees
                                       </a></p>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="collage_ne_ar_list">
                                   <img src="{{url('public/frontend/images/uploads/newsarticle/topcollage.jpg')}}" alt="">
                                   <span>Date {{date('Y,m,d')}}</span> <span class="pull-right"><i class="fa fa-eye"></i></span>
                                   <p><a href="#">
                                           National Law School (NLSIU) Bangalore M.Phil, Ph.D and LL.D Admissions 2019: Courses, Placement, Fees
                                       </a></p>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="profile_righlt_all_li">
                       @include('frontend.pages.profile.layouts.profile_right_sidebar')
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection