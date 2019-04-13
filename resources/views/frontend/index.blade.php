@extends('frontend.welcome')
@section('body')

    <!-- Start Home Page Slider -->
    <section id="home">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="{{asset('public/frontend')}}/images/slider/bg1x.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                <span>Welcome to <strong>Paaila.com</strong></span>
                            </h2>
                            <!--  <h3 class="animated3">
                                <span>The ultimate aim of your business</span>
                               </h3>
                             <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                             </p> -->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{asset('public/frontend')}}/images/slider/bg2.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4">
                                <span><strong>Paaila.com</strong> for the highest</span>
                            </h2>
                            <!--  <h3 class="animated5">
                               <span>The Key of your Success</span>
                             </h3>
                             <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                             </p> -->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{asset('public/frontend')}}/images/slider/bg3.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                            <!--  <h3 class="animated8 white">
                               <span>Why you are waiting</span>
                             </h3> -->
                            <div class="">
                                <!--  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Search  -->
    <div class="container">
        <section class="search-sec">
            <form action="#" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option>Collage</option>
                                    <option>School</option>
                                    <option>Consultancy</option>
                                    <option>Events</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="button" class="btn btn-danger wrn-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <!-- Search  -->

    <!-- Start Services Section -->
    <div class="section service">
        <div class="container">
            <div class="row">

                <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-leaf icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>High Quality Theme</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>

                    </div>
                </div>
                <!-- End Service Icon 1 -->

                <!-- Start Service Icon 2 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                    <div class="service-icon">
                        <i class="fa fa-desktop icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 2 -->

                <!-- Start Service Icon 3 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                    <div class="service-icon">
                        <i class="fa fa-eye icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 3 -->

                <!-- Start Service Icon 4 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
                    <div class="service-icon">
                        <i class="fa fa-code icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 4 -->

                <!-- Start Service Icon 5 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="05">
                    <div class="service-icon">
                        <i class="fa fa-rocket icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 5 -->

                <!-- Start Service Icon 6 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="06">
                    <div class="service-icon">
                        <i class="fa fa-css3 icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 6 -->

                <!-- Start Service Icon 7 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="07">
                    <div class="service-icon">
                        <i class="fa fa-download icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 7 -->

                <!-- Start Service Icon 8 -->
                <div class="col-md-3 col-xs-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="08">
                    <div class="service-icon">
                        <i class="fa fa-umbrella icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Paaila Any Content</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                    </div>
                </div>
                <!-- End Service Icon 8 -->

            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- End Services Section -->

    {{--Collage,Consultany,eaxm--}}
    <div class="collage_consultancy_eaxam">
        <div class="container">
            <ul class="nav nav-tabs">
                <li  class="active"><a href="#Collage" data-toggle="tab">Collage</a></li>
                <li><a href="#Consultancy" data-toggle="tab">Consultancy</a></li>
                <li><a href="#OnlineForm" data-toggle="tab">Online Entrance Form</a></li>
            </ul>
            <div class="tab-content" id="tabs">
                <div class="tab-pane active" id="Collage">
                    <div class="row">
                        <a href="{{url('list-collage')}}">
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-home icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>MANAGEMENT</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        </a>

                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>ENGINEERING</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>MEDICAL</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>AGRICULTURE</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>ARTS</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>AVIATION</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>COMMERCE</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>DENTAL</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>DESIGN</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>EDUCATION</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>LAW</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>PARAMEDICAL</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>PHARMACY</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>SCIENCE</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-rocket icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>COMPUTER APPLICATIONS</h4>
                                    <p>555 Collage</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="Consultancy">
                  <div class="events_listt">
                    <ul class="nav nav-tabs" style="margin-top: -50px;">
                        <li  class=""><a href="#Ecan" data-toggle="tab">E Can</a></li>
                        <li><a href="#Non_ecan" data-toggle="tab">Non E-Can</a></li>
                    </ul>
            <div class="tab-content" id="tabs">
                <div class="tab-pane active" id="Ecan">
                    <div class="row">
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-home icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>Study in Australia </h4>
                                    <p>553 Consultancy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-home icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>Study In USA</h4>
                                    <p>321 Consultancy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-6">
                            <div class="collage_category">
                                <div class="collage-icon">
                                    <i class="fa fa-home icon-large"></i>
                                </div>
                                <div class="collage-content">
                                    <h4>Study In Japan</h4>
                                    <p>555 Consultancy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Non_ecan">
                    <div class="events_listt">
                        <div class="row">
                            <h2>Non E-can Consultancy</h2>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-home icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>Study in Australia </h4>
                                        <p>553 Consultancy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-home icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>Study In USA</h4>
                                        <p>321 Consultancy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-home icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>Study In Japan</h4>
                                        <p>555 Consultancy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <div class="tab-pane" id="OnlineForm">
                    <div class="events_listt">
                        <div class="row">
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-home icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>MANAGEMENT</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>ENGINEERING</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>MEDICAL</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>AGRICULTURE</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>ARTS</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>AVIATION</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>COMMERCE</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>DENTAL</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>DESIGN</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>EDUCATION</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>LAW</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>PARAMEDICAL</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>PHARMACY</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>SCIENCE</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 col-sm-6">
                                <div class="collage_category">
                                    <div class="collage-icon">
                                        <i class="fa fa-rocket icon-large"></i>
                                    </div>
                                    <div class="collage-content">
                                        <h4>COMPUTER APPLICATIONS</h4>
                                        <p>404 Exam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Collage,Consultany,eaxm--}}


    <!-- Start Testimonials Section -->
    <div class="latest_news">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Start Recent Posts Carousel -->
                    <div class="latest-posts">
                        <h4 class="classic-title"><span>Latest News</span></h4>
                        <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 2 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Link Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 3 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 4 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 5 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 6 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Recent Posts Carousel -->

                </div>

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Testimonials</span></h4>

                    <!-- Start Testimonials Carousel -->
                    <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                        <!-- Testimonial 1 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                    </div>
                    <!-- End Testimonials Carousel -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Section -->


    <!-- Events Section -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Start Recent Posts Carousel -->
                    <div class="latest-posts">
                        <h4 class="classic-title"><span>Paaile Events</span></h4>
                        <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 2 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Link Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 3 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 4 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 5 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                            <!-- Posts 6 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                                <div class="post-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Recent Posts Carousel -->

                </div>

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Past Events</span></h4>

                    <!-- Start Testimonials Carousel -->
                    <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                        <!-- Testimonial 1 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="classic-testimonials item">
                            <div class="testimonial-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                    </div>
                    <!-- End Testimonials Carousel -->

                </div>
            </div>
        </div>
    </div>
    <!-- Events Section end -->



    <div class="top_feature_collage">
        <div class="container">
            <div class="row">
                <div class="top_feature_collage_title">
                    <h1>TOP FEATURED COLLEGES IN NEPAL</h1>
                   <p>Paailaa.com is an extensive search engine for the students, parents,
and education industry players who are seeking information</p>
                </div>
                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Islington College </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Kamalpokhari, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Global College of Management </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Mid Baneshwor, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Texas International College</a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Kathmandu, Nepal </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Islington College </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Kamalpokhari, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Islington College </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Kamalpokhari, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Global College of Management </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Mid Baneshwor, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Texas International College</a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Kathmandu, Nepal </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Islington College </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Kamalpokhari, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

            </div>
        </div>
    </div>



    <div class="top_feature_collage">
        <div class="container">
            <div class="row">
                <div class="top_feature_collage_title">
                    <h1>TOP FEATURED Consultancy IN NEPAL</h1>
                    <p>Paailaa.com is an extensive search engine for the students, parents,
and education industry players who are seeking information</p>
                </div>
                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">The Next Education Consultancy</a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Dillibazar, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">KIEC </a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Dillibazar, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Texas International College</a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Kathmandu, Nepal </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->

                <div class="col-md-3">
                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block" style="background-image: url('{{asset('public/frontend/images/topCollage/topcollage.jpg')}}');"></a>
                        <div class="twPc-button">
                            <div class="top_feature_collage_view">
                                <p>
                                    <i class="fa fa-eye"></i>3232
                                </p>
                            </div>
                        </div>
                        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                            <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/topCollage/logo.jpg')}}" class="twPc-avatarImg">
                        </a>
                        <div class="twPc-divUser">
                            <div class="collage_name">
                                <h2> <a href="{{url('collage-profile')}}">Bradford Education Consultancy</a></h2>
                            </div>
                            <div class="front_list_collage_lo">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>New Baneshwor, Kathmandu, Nepal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- col md 3 end  -->
            </div>
        </div>
    </div>






    <!-- Start Client/Partner Section -->
    <div class="partner">
        <div class="container">
            <div class="row">

                <!-- Start Big Heading -->
                <div class="big-title text-center">
                    <h1>Our Happy <strong>Clients</strong></h1>
                    <p class="title-desc">Partners We Work With</p>
                </div>
                <!-- End Big Heading -->

                <!--Start Clients Carousel-->
                <div class="our-clients">
                    <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

                        <!-- Client 1 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/1.png" alt="" /></a>
                        </div>

                        <!-- Client 2 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/2.jpg" alt="" /></a>
                        </div>

                        <!-- Client 3 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                        </div>

                        <!-- Client 4 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/7.jpg" alt="" /></a>
                        </div>

                        <!-- Client 5 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/6.png" alt="" /></a>
                        </div>

                        <!-- Client 6 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/4.gif" alt="" /></a>
                        </div>

                        <!-- Client 7 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/5.jpg" alt="" /></a>
                        </div>

                        <!-- Client 8 -->
                        <div class="client-item item">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                        </div>

                    </div>
                </div>
                <!-- End Clients Carousel -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->

@endsection