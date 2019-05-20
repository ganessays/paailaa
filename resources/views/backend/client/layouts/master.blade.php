@include('frontend.layouts.header')
{{--<link rel="stylesheet" type="text/css" href="{{asset('public/publish')}}/assets/css/infinite-slider.css" type="text/css"/>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
@include('frontend.layouts.nav_header')
@include('frontend.layouts.footer')
@include('frontend.layouts.nav_footer')

@yield('header')
@yield('nav_header')

@yield('content')

@yield('footer')
@yield('nav_footer')