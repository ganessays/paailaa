@extends('frontend.welcome')
@section('body')
    <link rel="stylesheet" href="{{asset('public/frontend/css/news.css')}}">
    <div class="News_details">
        <div class="container-fluid">
            <div class="row">
               <div class="list_news_details">
                  <div class="col-md-12"> <h2>News</h2></div>
                   <div class="col-md-8">
                       <div class="news-holder">
                           <ul class="news-headlines">
                               <li class="selected">La bici roja en la pared</li>
                               <li>New leash laws in effect for floppy-eared dogs</li>
                               <li>Insider: Can palm trees be saved?</li>
                               <li>Fresh recipes to titillate the taste buds</li>
                               <li>Insider: Can palm trees be saved?</li>
                           </ul>
                           <div class="news-preview">
                               <div class="news-content top-content">
                                   <img src="http://cdn.impressivewebs.com/news1.jpg">
                                   <div class="resume">
                                       <a href="#" class="title">La bici roja en la pared</a>
                                       <p>Segun un estudio realizao en el MIT, las bicicletas rojas que se apoyan en paredes blancas suelen marcar la pared, pero no de color rojo.</p>
                                   </div>
                               </div><!-- .news-content -->
                               <div class="news-content">
                                   <img src="http://cdn.impressivewebs.com/news2.jpg">
                                   <div class="resume">
                                       <a href="#" class="title">New leash laws in effect for floppy-eared dogs</a>
                                       <p>Ears on dogs can be a tricky thing. Find out more about this amazing story and why these dogs are a nuisance.</p>
                                   </div>
                               </div><!-- .news-content -->
                               <div class="news-content">
                                   <img src="http://cdn.impressivewebs.com/news3.jpg">
                                   <div class="resume">
                                       <a href="#" class="title">Insider: Can palm trees be saved?</a>
                                       <p>Ah, the palm tree. It feeds us, it shades us, it does whatever we ask. We should think about it more deeply.</p>
                                   </div>
                               </div><!-- .news-content -->
                               <div class="news-content">
                                   <img src="http://cdn.impressivewebs.com/news4.jpg">
                                   <div class="resume">
                                       <a href="#" class="title">Fresh recipes to titillate the taste buds</a>
                                       <p>Food is great. These recipes will make you appreciate food as if it were even greater than great. It will be super great.</p>
                                   </div>
                               </div><!-- .news-content -->
                               <div class="news-content">
                                   <img src="http://cdn.impressivewebs.com/news3.jpg">
                                   <div class="resume">
                                       <a href="#" class="title">Insider: Can palm trees be saved?</a>
                                       <p>Ah, the palm tree. It feeds us, it shades us, it does whatever we ask. We should think about it more deeply.</p>
                                   </div>
                               </div><!-- .news-content -->
                           </div><!-- .news-preview -->
                       </div><!-- .news-holder -->

                       {{--newsList--}}
                       <div class="paailaa_news_list">
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="paailaa_exam_news">
                                       <h2>Exam News</h2>
                                       <img alt="" src="{{asset('public/frontend/images/topCollage/topcollage.jpg')}}">
                                   </div>
                               </div>
                               <div class="col-md-4"></div>
                               <div class="col-md-4"></div>
                           </div>
                       </div>

                   </div>
                   <div class="col-md-4">
                      <div class="news-sidebar">
                          @include('frontend.pages.sidebar.news_sidebar')
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('public/frontend/js/news.js')}}"></script>
@endsection