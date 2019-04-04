@include('frontend.layouts.header')
@include('frontend.layouts.nav_header')
@include('frontend.layouts.footer')
@include('frontend.layouts.nav_footer')

@yield('header')
@yield('nav_header')

@yield('content')

@yield('footer')
@yield('nav_footer')
