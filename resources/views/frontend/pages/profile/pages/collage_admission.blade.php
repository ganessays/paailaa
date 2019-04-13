@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="collage_about_left">
                        <span>Updated On - February 8th 2019</span>
                        <h2 class="collage_about_left_border">AIIMS New Delhi Admission 2019: MBBS, Entrance Exam, Admit Card, Result</h2>
                        <p>
                         All India Institute of Medical Sciences Delhi (AIIMS Delhi) is a medical college and
                               medical research public university based in New Delhi, India. The Institute was
                               established in 1956 and operates autonomously. It has been ranked best institute
                               for pursuing medical course across India. AIIMS Delhi conducts admission for
                               various courses through the national level entrance test. It provides undergraduate,
                               postgraduate and doctoral courses.
                        </p>
                        <h3 class="collae_highlights">AIIMS New Delhi Admission Highlights</h3>
                        <table border="1" class="table">
                            <tr style="background: #ff7900; color: #fff;">
                                <td>Establishment</td>
                                <td>Date</td>
                            </tr>
                            <tr>    
                                <td>Institute Type</td>
                                <td>Public</td>
                            </tr>
                            <tr>
                                <td>Basic criteria of Admission</td>
                                <td>Entrance-based</td>
                            </tr>
                            <tr>
                                <td>Application Mode</td>
                                <td>Online</td>
                            </tr> 
                            <tr>
                                <td>Name of the Entrance</td>
                                <td>MBBS- AIIMS 2019</td>
                            </tr>
                        </table>
                        <h3 class="collage_course">AIIMS Delhi Admission Schedule 2019 (Tentative)</h3>
                        <table border="1" class="table">
                            <tr style="background: #ff7900; color: #fff;">
                                <td>Establishment</td>
                                <td>Date</td>
                            </tr>
                            <tr>    
                                <td>Institute Type</td>
                                <td>Public</td>
                            </tr>
                            <tr>
                                <td>Basic criteria of Admission</td>
                                <td>Entrance-based</td>
                            </tr>
                            <tr>
                                <td>Application Mode</td>
                                <td>Online</td>
                            </tr> 
                            <tr>
                                <td>Name of the Entrance</td>
                                <td>MBBS- AIIMS 2019</td>
                            </tr>
                        </table>
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