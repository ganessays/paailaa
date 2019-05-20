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
    @foreach($post as $postData)
    <div class="collage_about_right_list_content">
        <a href="{{url($client->user->name.'/'.$postData->slug.'/'.'news-article')}}">
            @if(isset($postData->image))
            <img src="{{url('public/frontend/images/uploads/client/post/image/').'/'.$postData->image}}" alt="" />
                @else
                <img src="{{url('public/frontend/default/image.jpg')}}" alt="" />
                @endif
            <p>
            <b>
                SC rules out upper age limit for JEE Advanced, Changes in JEE Main Expected
            </b>
            <span class="collage_about_right_list"> MARCH 19TH, 2019</span>
        </p>
        </a>
    </div>
        @endforeach
</div>