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
                                <li>
                                    <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li>
                                    <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                                <li>
                                    <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
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
                            <img alt="" src="{{asset('public/frontend')}}/images/margo.png" style="max-width: 120px;margin-top: -15px;">
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
                                <a href="about.html">Sports</a>
                                <ul class="dropdown">
                                    <li><a href="right-sidebar.html">Paailaa Any Menu</a>
                                    </li>
                                    <li><a href="left-sidebar.html">Paaila Any Menu</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Social Services</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="{{url('login')}}" class="@if(request()->segment('1') =='login') active @endif">Login</a></li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>

                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="index.html">Home</a>
                        <ul class="dropdown">
                            <li><a class="active" href="index-01.html">Any Menu</a>
                            </li>
                            <li><a href="index-02.html">Any Menu</a>
                            </li>
                            <li><a href="index-03.html">Any Menu</a>
                            </li>
                            <li><a href="index-04.html">Any Menu</a>
                            </li>
                            <li><a href="index-05.html">Any Menu</a>
                            </li>
                            <li><a href="index-06.html">Any Menu</a>
                            </li>
                            <li><a href="index-07.html">Any Menu</a>
                            </li>
                            <li><a href="index-08.html">HSome Version 8</a>
                            </li>
                            <li><a href="index-09.html">Any Menu</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">Pages</a>
                        <ul class="dropdown">
                            <li><a href="about.html">About</a>
                            </li>
                            <li><a href="services.html">Services</a>
                            </li>
                            <li><a href="right-sidebar.html">Right Sidebar</a>
                            </li>
                            <li><a href="left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Shortcodes</a>
                        <ul class="dropdown">
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="forms.html">Forms</a>
                            </li>
                            <li><a href="action-box.html">Action Box</a>
                            </li>
                            <li><a href="testimonials.html">Testimonials</a>
                            </li>
                            <li><a href="latest-posts.html">Latest Posts</a>
                            </li>
                            <li><a href="latest-projects.html">Latest Projects</a>
                            </li>
                            <li><a href="pricing.html">Pricing Tables</a>
                            </li>
                            <li><a href="animated-graphs.html">Animated Graphs</a>
                            </li>
                            <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="portfolio-3.html">Portfolio</a>
                        <ul class="dropdown">
                            <li><a href="portfolio-2.html">2 Columns</a>
                            </li>
                            <li><a href="portfolio-3.html">3 Columns</a>
                            </li>
                            <li><a href="portfolio-4.html">4 Columns</a>
                            </li>
                            <li><a href="single-project.html">Single Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog.html">Blog - right Sidebar</a>
                            </li>
                            <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                            </li>
                            <li><a href="single-post.html">Blog Single Post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->

            </div>
            <!-- End Header Logo & Naviagtion -->

        </header>
        <!-- End Header Section -->
    @endsection