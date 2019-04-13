@extends('frontend.welcome')
@section('body')
    <link rel="stylesheet" href="{{asset('public/frontend/css/gallery.css')}}">
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>

    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                   <div class="about_collage_gallery">
                       <section id="gallery">
                               <div id="image-gallery">
                                   <div class="row">
                                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                           <div class="img-wrapper">
                                               <a href="{{asset('public/frontend/images/clientsLogo/3.jpg')}}"><img src="{{asset('public/frontend/images/clientsLogo/3.jpg')}}" class="img-responsive"></a>
                                               <div class="img-overlay">
                                                   <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                           <div class="img-wrapper">
                                               <a href="{{asset('public/frontend/images/clientsLogo/3.jpg')}}"><img src="{{asset('public/frontend/images/clientsLogo/3.jpg')}}" class="img-responsive"></a>
                                               <div class="img-overlay">
                                                   <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                           <div class="img-wrapper">
                                               <a href="{{asset('public/frontend/images/clientsLogo/3.jpg')}}"><img src="{{asset('public/frontend/images/clientsLogo/3.jpg')}}" class="img-responsive"></a>
                                               <div class="img-overlay">
                                                   <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                           <div class="img-wrapper">
                                               <a href="{{asset('public/frontend/images/clientsLogo/3.jpg')}}"><img src="{{asset('public/frontend/images/clientsLogo/3.jpg')}}" class="img-responsive"></a>
                                               <div class="img-overlay">
                                                   <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                           <div class="img-wrapper">
                                               <a href="{{asset('public/frontend/images/clientsLogo/3.jpg')}}"><img src="{{asset('public/frontend/images/clientsLogo/3.jpg')}}" class="img-responsive"></a>
                                               <div class="img-overlay">
                                                   <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- End row -->
                               </div><!-- End image gallery -->
                       </section>
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
        // Gallery image hover
        $( ".img-wrapper" ).hover(
            function() {
                $(this).find(".img-overlay").animate({opacity: 1}, 600);
            }, function() {
                $(this).find(".img-overlay").animate({opacity: 0}, 600);
            }
        );

        // Lightbox
        var $overlay = $('<div id="overlay"></div>');
        var $image = $("<img>");
        var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
        var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
        var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

        // Add overlay
        $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
        $("#gallery").append($overlay);

        // Hide overlay on default
        $overlay.hide();

        // When an image is clicked
        $(".img-overlay").click(function(event) {
            // Prevents default behavior
            event.preventDefault();
            // Adds href attribute to variable
            var imageLocation = $(this).prev().attr("href");
            // Add the image src to $image
            $image.attr("src", imageLocation);
            // Fade in the overlay
            $overlay.fadeIn("slow");
        });

        // When the overlay is clicked
        $overlay.click(function() {
            // Fade out the overlay
            $(this).fadeOut("slow");
        });

        // When next button is clicked
        $nextButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").next().find("img"));
            // All of the images in the gallery
            var $images = $("#image-gallery img");
            // If there is a next image
            if ($nextImg.length > 0) {
                // Fade in the next image
                $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            } else {
                // Otherwise fade in the first image
                $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            }
            // Prevents overlay from being hidden
            event.stopPropagation();
        });

        // When previous button is clicked
        $prevButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").prev().find("img"));
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            // Prevents overlay from being hidden
            event.stopPropagation();
        });

        // When the exit button is clicked
        $exitButton.click(function() {
            // Fade out the overlay
            $("#overlay").fadeOut("slow");
        });
    </script>
@endsection