
@extends('backend.client.index')
@section('body')
    <script src="{{url('public/server/bower_components/ckeditor/ckeditor.js')}}"></script>
    <div class="client_profile_content">

    </div>
    <div class="client_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="client_left_area">
                        <div class="client_area_left_listing">
                            <h3>List <a href="{{url('client/courses-list')}}">Create New Course</a></h3>
                        </div>
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="form-group col-md-2">
                            <label for="">Course</label>
                        </div>
                        <div class="form-group col-md-10">
                            <select name="course_id" id="course_id" class="form-control">
                                <option value="">Choose Course</option>
                                @foreach($Courses as $course)
                                    <option value="{{$course->id}}" @if($course->id ==$client_course->course_id ) selected @endif>{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Course Fees</label>
                        </div>
                        <div class="form-group col-md-10">
                            <input type="number" name="course_fee" class="form-control" value="{{$client_course->course_fee}}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Duration</label>
                        </div>
                        <div class="form-group col-md-10">
                            <input type="text" name="duration" id="duration" class="form-control" value="{{$client_course->duration}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Detail</label>
                            <textarea class="form-control content" name="detail" id="editor1">{{$client_course->detail}} </textarea>
                        </div>
                        <button type="update" class="btn btn-primary btn-sm">Create</button>
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client_area_right">
                        <h2>Your Info <i class="fa fa-user"></i></h2>
                        <a class=" twPc-block" style="background-image: url('{{asset('public/frontend/images/uploads/college/banner')}}/{{$client->banner}}'); height: 200px"></a>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cllage_pfofile_image">
                                    <div class="twPc-button">
                                        <div class="top_feature_collage_view">
                                            <p>
                                                <i class="fa fa-eye"></i>3232
                                            </p>
                                        </div>
                                    </div>
                                    <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                                        <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$client->logo}}" class="twPc-avatarImg">
                                    </a>
                                    <div class="twPc-divUser">
                                        <div class="twPc-divName">
                                            <h1 class="collage_p_t">{{$client->company_name}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection