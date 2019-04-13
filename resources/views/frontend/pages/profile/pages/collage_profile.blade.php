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
                        <h2 class="collage_about_left_border">About Collage</h2>
                        <p>
                           <b> Updated On - January 20th 2018</b> <br>
                            Christ University is a deemed private university. It is the first indigenous Syrian Catholic religious congregation in India. The University is specifically known for its undergraduate courses and has ranked among the top ten for UG courses in surveys done by the India Today group. Every year, more than 16000 students enroll in various UG and PG programs offered at Christ University. Admission will be based on entrance exam conducted by the university exception MBA. For MBA it considers CAT, MAT, GMAT, CMAT, XAT or ATMA Scores.
                        </p>
                        <p>
                            Click here for Christ University courses and Fees Structure
                        </p>
                        <h3 class="collae_highlights">Highlights of Christ University</h3>
                        <table border="1" class="table">
                            <tr>
                                <td>Establishment</td>
                                <td>1969</td>
                            </tr>
                            <tr>
                                <td>Type of University</td>
                                <td>Deemed to be University</td>
                            </tr>
                            <tr>
                                <td>Recognitions</td>
                                <td>UGC & NAAC</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>Bangalore, Karnataka</td>
                            </tr>
                        </table>
                        <h3 class="collage_course">Christ University Courses</h3>
                        <p>
                            Christ University UG Courses
                            University offers 3 years full-time programs in various streams like arts, commerce, science, hotel management and computer applications. Selection of students for the Program will be based on Entrance Exam conducted by the university. Click here for Christ University UG Admissions 2018

                            Christ University B.Tech. & M.Tech Courses
                            University offers 4 years full-time programs for B.Tech. and two years full-time programs for M.Tech. There are seven different specializations for B.Tech. and six specializations for M.Tech. Selection of students for the Program will be based on Entrance Exam conducted by the university. Click here for Christ University B.Tech & M.Tech. Admissions 2018

                            Christ University Law Courses
                            University offers 5 years integrated BA LLB & BBA LLB program and for post-graduation two years LLM Program. Selection of students for the program will be based on Christ University Law Entrance Examination (CULEE) which is conducted by the university. For More details Christ University Law Admissions 2018

                            Christ University B.Ed. Courses
                            University offers two years full-time B.Ed. Program. Selection of students for the program will be based on Skill Assessment, which will consist of a test of written skills, communication skills, and logical reasoning, followed by a personal interview round. For More details Christ University B.Ed. Admissions 2018

                            Christ University MBA Courses
                            University Offers two years full-time MBA program. Selection of students for the program will be based on entrance exams, which are mentioned below:
                        </p>

                        <table border="1" class="table">
                            <tr>
                                <td>Exam Name</td>
                                <td>Score required</td>
                            </tr>
                            <tr>
                                <td>MAT (September/December 2016/February 2017)</td>
                                <td>600 or above</td>
                            </tr>
                            <tr>
                                <td>Recognitions</td>
                                <td>UGC & NAAC</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>Bangalore, Karnataka</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collage_about_right">
                        <h1 class="collage_about_right_apply">
                            <a href="#" class="collage_about_right_apply">Apply Now
                                <i class="fa fa-envelope" style="float: right"></i>
                            </a>

                        </h1>
                        <h1 class="collage_about_right_download">
                            <a href="#" class="collage_about_right_download">Download Brochure
                                <i class="fa fa-download" style="float: right"></i>
                            </a>
                        </h1>

                    </div>
                    <div class="collage_about_right_list">
                        <h2 class="collage_about_right_list_h2" > <i class="fa fa-street-view"></i>NEWS</h2>
                       <div class="collage_about_right_list_content">
                           <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                           <p>
                               <b>
                                   SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                               </b>
                               <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                           </p>
                       </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                    </div>
                    <div class="collage_about_right_list">
                        <h2 class="collage_about_right_list_h2" > <i class="fa fa-street-view"></i>STUDENTS ALSO VISITED</h2>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                    </div>
                    <div class="collage_about_right_list">
                        <h2 class="collage_about_right_list_h2" > <i class="fa fa-street-view"></i>ADMISSION</h2>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                    </div>
                    <div class="collage_about_right_list">
                        <h2 class="collage_about_right_list_h2" > <i class="fa fa-street-view"></i>OTHER COLLEGES IN THE SAME GROUP</h2>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                        <div class="collage_about_right_list_content">
                            <a href="#"><img src="{{asset('public/frontend')}}/images/clientsLogo/3.jpg" alt="" /></a>
                            <p>
                                <b>
                                    SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
                                </b>
                                <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




















    <script>


        // Out advancer buttons
        var pnAdvancerLeft = document.getElementById("pnAdvancerLeft");
        var pnAdvancerRight = document.getElementById("pnAdvancerRight");

        var pnProductNav = document.getElementById("pnProductNav");
        var pnProductNavContents = document.getElementById("pnProductNavContents");

        pnProductNav.setAttribute(
            "data-overflowing",
            determineOverflow(pnProductNavContents, pnProductNav)
        );

        // Handle the scroll of the horizontal container
        var last_known_scroll_position = 0;
        var ticking = false;

        function doSomething(scroll_pos) {
            pnProductNav.setAttribute(
                "data-overflowing",
                determineOverflow(pnProductNavContents, pnProductNav)
            );
        }

        pnProductNav.addEventListener("scroll", function() {
            last_known_scroll_position = window.scrollY;
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    doSomething(last_known_scroll_position);
                    ticking = false;
                });
            }
            ticking = true;
        });

        pnAdvancerLeft.addEventListener("click", function() {
            // If in the middle of a move return
            if (SETTINGS.navBarTravelling === true) {
                return;
            }
            // If we have content overflowing both sides or on the left
            if (
                determineOverflow(pnProductNavContents, pnProductNav) === "left" ||
                determineOverflow(pnProductNavContents, pnProductNav) === "both"
            ) {
                // Find how far this panel has been scrolled
                var availableScrollLeft = pnProductNav.scrollLeft;
                // If the space available is less than two lots of our desired distance, just move the whole amount
                // otherwise, move by the amount in the settings
                if (availableScrollLeft < SETTINGS.navBarTravelDistance * 2) {
                    pnProductNavContents.style.transform =
                        "translateX(" + availableScrollLeft + "px)";
                } else {
                    pnProductNavContents.style.transform =
                        "translateX(" + SETTINGS.navBarTravelDistance + "px)";
                }
                // We do want a transition (this is set in CSS) when moving so remove the class that would prevent that
                pnProductNavContents.classList.remove("pn-ProductNav_Contents-no-transition");
                // Update our settings
                SETTINGS.navBarTravelDirection = "left";
                SETTINGS.navBarTravelling = true;
            }
            // Now update the attribute in the DOM
            pnProductNav.setAttribute(
                "data-overflowing",
                determineOverflow(pnProductNavContents, pnProductNav)
            );
        });

        pnAdvancerRight.addEventListener("click", function() {
            // If in the middle of a move return
            if (SETTINGS.navBarTravelling === true) {
                return;
            }
            // If we have content overflowing both sides or on the right
            if (
                determineOverflow(pnProductNavContents, pnProductNav) === "right" ||
                determineOverflow(pnProductNavContents, pnProductNav) === "both"
            ) {
                // Get the right edge of the container and content
                var navBarRightEdge = pnProductNavContents.getBoundingClientRect().right;
                var navBarScrollerRightEdge = pnProductNav.getBoundingClientRect().right;
                // Now we know how much space we have available to scroll
                var availableScrollRight = Math.floor(
                    navBarRightEdge - navBarScrollerRightEdge
                );
                // If the space available is less than two lots of our desired distance, just move the whole amount
                // otherwise, move by the amount in the settings
                if (availableScrollRight < SETTINGS.navBarTravelDistance * 2) {
                    pnProductNavContents.style.transform =
                        "translateX(-" + availableScrollRight + "px)";
                } else {
                    pnProductNavContents.style.transform =
                        "translateX(-" + SETTINGS.navBarTravelDistance + "px)";
                }
                // We do want a transition (this is set in CSS) when moving so remove the class that would prevent that
                pnProductNavContents.classList.remove("pn-ProductNav_Contents-no-transition");
                // Update our settings
                SETTINGS.navBarTravelDirection = "right";
                SETTINGS.navBarTravelling = true;
            }
            // Now update the attribute in the DOM
            pnProductNav.setAttribute(
                "data-overflowing",
                determineOverflow(pnProductNavContents, pnProductNav)
            );
        });

        pnProductNavContents.addEventListener(
            "transitionend",
            function() {
                // get the value of the transform, apply that to the current scroll position (so get the scroll pos first) and then remove the transform
                var styleOfTransform = window.getComputedStyle(pnProductNavContents, null);
                var tr =
                    styleOfTransform.getPropertyValue("-webkit-transform") ||
                    styleOfTransform.getPropertyValue("transform");
                // If there is no transition we want to default to 0 and not null
                var amount = Math.abs(parseInt(tr.split(",")[4]) || 0);
                pnProductNavContents.style.transform = "none";
                pnProductNavContents.classList.add("pn-ProductNav_Contents-no-transition");
                // Now lets set the scroll position
                if (SETTINGS.navBarTravelDirection === "left") {
                    pnProductNav.scrollLeft = pnProductNav.scrollLeft - amount;
                } else {
                    pnProductNav.scrollLeft = pnProductNav.scrollLeft + amount;
                }
                SETTINGS.navBarTravelling = false;
            },
            false
        );

        // Handle setting the currently active link
        pnProductNavContents.addEventListener("click", function(e) {
            var links = [].slice.call(document.querySelectorAll(".pn-ProductNav_Link"));
            links.forEach(function(item) {
                item.setAttribute("aria-selected", "false");
            });
            e.target.setAttribute("aria-selected", "true");
        });

        function determineOverflow(content, container) {
            var containerMetrics = container.getBoundingClientRect();
            var containerMetricsRight = Math.floor(containerMetrics.right);
            var containerMetricsLeft = Math.floor(containerMetrics.left);
            var contentMetrics = content.getBoundingClientRect();
            var contentMetricsRight = Math.floor(contentMetrics.right);
            var contentMetricsLeft = Math.floor(contentMetrics.left);
            if (
                containerMetricsLeft > contentMetricsLeft &&
                containerMetricsRight < contentMetricsRight
            ) {
                return "both";
            } else if (contentMetricsLeft < containerMetricsLeft) {
                return "left";
            } else if (contentMetricsRight > containerMetricsRight) {
                return "right";
            } else {
                return "none";
            }
        }

    </script>
@endsection