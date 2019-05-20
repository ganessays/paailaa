@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    @foreach($courses as $course)
                   <div class="courses_fee_profile">
                       <h2>@if(isset($course->course->name)){{$course->course->name}} @endif</h2>
                       <a href=""><i class="fa fa-clock"></i>{{$course->duration}} </a>
                       <a href=""><i class="fa fa-book"></i> Courses Fees Rs.{{$course->course_fee}}</a>
                       <a href=""><i class="fa fa-book"></i> FULL TIME</a>
                       <a href=""> <i class="fa fa-database"></i> {!! $course->detail !!}</a>
                   </div>
                        @endforeach
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