@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                   <div class="courses_fee_profile">
                       <h2>BACHELOR OF MEDICINE, BACHELOR OF SURGERY (MBBS)</h2>
                       <a href=""><i class="fa fa-clock"></i> 5 YEARS 6 MONTHS </a>
                       <a href=""><i class="fa fa-book"></i> FULL TIME</a>
                       <a href=""> <i class="fa fa-database"></i> 100 SEATS PER COURSE</a>
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