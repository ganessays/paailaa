@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="collage_faculty_page">
                        <div class="others_faculty">
                        <div class="row">
                            @foreach($facility as $facilityData)
                            <div class="col-md-2">
                                <div class="teacher_name">
                                    <img src="{{asset('public/frontend/images/uploads/facility/images/').'/'.$facilityData->facility->image}}" alt="{{$facilityData->facility->name}}">
                                    <P>{{$facilityData->facility->name}}</P>
                                </div>
                            </div>
                                @endforeach
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