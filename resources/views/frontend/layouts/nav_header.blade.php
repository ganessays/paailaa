@section('nav_header')
    <body>
    <!-- Full Body Container -->
    <div id="container">
        <!-- Start Header Section -->
        <header class="clearfix">
            <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> Putalisadak Kathmandu, Nepal </a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@paaila.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +9843683504</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Start Social Links -->
                            <ul class="social-list">
                                <li>
                                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                            <!-- End Social Links -->
                        </div>
                        <!-- .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .top-bar -->
            <!-- End Top Bar -->


            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="{{url('')}}">
                            <img alt="" src="{{asset('public/frontend/images/logo/logo.png')}}" style="max-width: 120px;margin-top: -15px;">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Stat Search -->
                        <div class="search-side">
                            <a class="show-search"><i class="fa fa-search"></i></a>
                            <div class="search-form">
                                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                    <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                </form>
                            </div>
                        </div>
                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="@if(request()->segment('1') =='') active @endif" href="{{url('')}}">Home</a>
                                {{--<ul class="dropdown">--}}
                                {{--<li><a class="" href="index-01.html">Education</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index-02.html">Any Menu</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index-03.html">Any Menu</a>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                            <li>
                                <a href="about.html">Education</a>
                                {{--<ul class="dropdown">--}}
                                    {{--<li><a href="right-sidebar.html">Paailaa Any Menu</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="left-sidebar.html">Paaila Any Menu</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="404.html">404 Page</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Social Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="{{url('news')}}">News</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>

                            @if(\Illuminate\Support\Facades\Auth::check())
                                <li>
                                    <a href="about.html">Profile</a>
                                    <ul class="dropdown">
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            @if(\Illuminate\Support\Facades\Auth::user()->role_id== 4)
                                        <li><a href="{{url('client/')}}">Dashboard</a></li>
                                        <li><a href="{{url('client/profile')}}">Profile Manager</a></li>
                                        <li><a href="{{url('client/courses-fees')}}">Courses & Fees</a></li>
                                        <li><a href="{{url('client/faculty')}}">Faculty</a></li>
                                        <li><a href="{{url('client/facilities')}}">Facilities</a></li>
                                        <li><a href="{{url('client/galleries')}}">Galleries</a></li>
                                        <li><a href="{{url('client/create-post')}}">News & Article</a></li>
                                            @endif
                                            @endif

                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{url('login')}}">Login</a></li>
                            @endif
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                    {{--Client Area--}}
                    {{--@if(\Illuminate\Support\Facades\Auth::check())--}}
                        {{--@if(\Illuminate\Support\Facades\Auth::user()->role_id== 4)--}}

                            {{--<div class="navbar-collapse collapse" style="background: #0696d0;">--}}
                                {{--<!-- Start Navigation List -->--}}
                                {{--<ul class="nav navbar-nav navbar-right">--}}
                                    {{--<li><a href="{{url('client/')}}">Dashboard</a></li>--}}
                                    {{--<li><a href="{{url('client/profile')}}">Profile Manager</a></li>--}}
                                    {{--<li><a href="{{url('client/courses-fees')}}">Courses & Fees</a></li>--}}
                                    {{--<li><a href="{{url('client/faculty')}}">Faculty</a></li>--}}
                                    {{--<li><a href="{{url('client/facilities')}}">Facilities</a></li>--}}
                                    {{--<li><a href="{{url('client/galleries')}}">Galleries</a></li>--}}
                                    {{--<li><a href="{{url('client/create-post')}}">News & Article</a></li>--}}
                                {{--</ul>--}}
                                {{--<!-- End Navigation List -->--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--@endif--}}
                    {{--client Area end--}}
                </div>

                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="index.html">Home</a>
                        {{--<ul class="dropdown">--}}
                            {{--<li><a href="index-08.html">HSome Version 8</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-09.html">Any Menu</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Socila Service</a></li>
                    <li><a href="#">Team Member</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    @else
                        <li><a href="{{url('login')}}">Login</a></li>
                    @endif
                </ul>
                <!-- Mobile Menu End -->

            </div>
            <!-- End Header Logo & Naviagtion -->

        </header>
        <!-- End Header Section -->
@endsection