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
                       <h2>EXAM NEWS AND ARTICLES</h2>
                       <hr>
                       <div class="row">
                           @foreach($post as $postData)
                           <div class="col-md-4">
                               <a href="#">
                               <div class="collage_ne_ar_list">
                                   @if(isset($postData->image))
                                       <img src="{{url('public/frontend/images/uploads/client/post/image/').'/'.$postData->image}}" alt="" />
                                   @else
                                       <img src="{{url('public/frontend/default/image.jpg')}}" alt=""/>
                                   @endif
                                       <span>Date {{$postData->start_at}}</span> <span class="pull-right"><i class="fa fa-eye"></i></span>
                                       <p><b>{{$postData->title}}</b></p>
                               </div>
                               </a>
                           </div>
                               @endforeach
                       </div>
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