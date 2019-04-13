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
                        <h2>FACULTY DETAILS</h2>
                        <hr>
                        <h3>Dr. Balram Airan</h3>
                        <b>Dean</b>
                        <h3>OTHER FACULTY DETAILS</h3>

                        <div class="others_faculty">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="teacher_name">
                                    <h4>Dr. Aarti Sharma</h4>
                                    <P>ASSISTANT PROFESSOR, DEPARTMENT OF RHEUMATOLOGY</P>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="teacher_details">
                                    <h5>Contact this faculty</h5>
                                    <span>EMAIL - aartimed@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="others_faculty">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="teacher_name">
                                        <h4>Dr. Aarti Sharma</h4>
                                        <P>ASSISTANT PROFESSOR, DEPARTMENT OF RHEUMATOLOGY</P>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="teacher_details">
                                        <h5>Contact this faculty</h5>
                                        <span>EMAIL - aartimed@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="others_faculty">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="teacher_name">
                                        <h4>Dr. Aarti Sharma</h4>
                                        <P>ASSISTANT PROFESSOR, DEPARTMENT OF RHEUMATOLOGY</P>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="teacher_details">
                                        <h5>Contact this faculty</h5>
                                        <span>EMAIL - aartimed@gmail.com</span>
                                    </div>
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