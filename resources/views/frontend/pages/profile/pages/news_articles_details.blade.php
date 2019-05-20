@extends('frontend.welcome')
@section('body')
    <div class="collage_profile">
        @include('frontend.pages.profile.layouts.profile_header')
    </div>
    <div class="about_collage_profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                   <div class="collage_news_article_list">
                          <h2>{{$post_d->title}}</h2>
                       <img src="{{asset('public/frontend/images/uploads/client/post/image').'/'.$post_d->image}}" alt="">
                           {!! $post_d->detail !!}
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