@section('header')
        <!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Medical Visa Services">
    <meta property="og:url" content="http://medicalvisaservices.airambulancenepal.com/" />

    <meta property="og:title" content='Medical Visa Services' />
    <meta property="og:description" content='' />
    <meta property="og:type" content="article" />
    <meta property="og:image" content=""/>
    <meta name="author" content="https://www.ganesh-thapa.com.np">
    <!-- Basic -->
   @if(isset($title))
        <title>{!! $title !!}</title>
    <title>medicalvisaservices</title>
@endif
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="GrayGrids">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/asset/css/bootstrap.min.css" type="text/css" media="screen">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/settings.css" type="text/css" media="screen">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/font-awesome.min.css" type="text/css" media="screen">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/slicknav.css" media="screen">
    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/style.css" media="screen">
    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/responsive.css" media="screen">
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/animate.css" media="screen">
    <!-- Color Defult -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/colors/red.css" media="screen" />
    <!-- Margo JS  -->
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/modernizrr.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.appear.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/count-to.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/skrollr.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/mediaelement-and-player.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend')}}/js/profile.js"></script>
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/costom.css">
    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
    @endsection