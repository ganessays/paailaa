@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="collage_info_page">
                        <h2>hostel</h2>
                        <hr>

                           <p>
                            Updated On - February 12th 2019 by ANAMIKA MAHAJAN
                        </p>
                            <p>
                                Amity Global Business School (AGBS) Kochi is one of the well-known B-Schools in South India. The institute has directed its student’s energies to the holistic development of the individual. The Amity’s Faculties consist of professionals from the industry having expertise in respective fields having a management qualification.
                            </p>

                            <p>
                                Amity Kochi offers to students a splendid environment in which they can flourish. Amity ensures that their graduating students are not just work-efficient but also they are made socially conscious by engaging them in activities and connecting with less privileged stakeholders of the community.
                            </p>

                            <p>
                                Read more: Amity Kochi Admissions
                            </p>
                        <p>
                            Why Amity?
                        </p>
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