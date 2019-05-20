@extends('frontend.welcome')
@section('body')
   <div class="events_front">
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <div class="front_event">
                       <h3 class="events_h3">Paailaa Upcoming Events</h3>
                       @foreach($event as $events)
                           <img src="{{asset('public/frontend/images/uploads/event/').'/'.$events->image}}" alt="">
                       <div class="f_e_content">
                           <h3 class="post-title"><a href="#">{{$events->name}}</a></h3>
                           {!! str_limit($events->detail, 260) !!}
                           <a class="read-more" href="#">Read More...</a>
                       </div>
                       @endforeach
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="front_event">
                       <h3 class="events_h3">Paailaa Past Events</h3>
                       @foreach($pastEvent as $events)
                           <img src="{{asset('public/frontend/images/uploads/event/').'/'.$events->image}}" alt="">
                           <div class="f_e_content">
                               <h3 class="post-title"><a href="#">{{$events->name}}</a></h3>
                               {!! str_limit($events->detail, 136) !!}
                               <a class="read-more" href="#">Read More...</a>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection