@extends('Admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
       <div class="content">
           <!-- Partial Table -->
           <div class="block" style="padding:20px;">
               <form action="{{url('Admin/add-category')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                   <div class="row">
                       <div class="form-group col-sm-6">
                           <label for="slide_title">Slide Title<font color="#ff0000">*</font></label>
                           <input type="text" class="form-control" id="slide_title" name="slide_title" placeholder="Slide Title"  required="" data-validation-error-msg="news title is required">
                           {{$errors->first('slide_title')}}
                       </div>

                       <div class="form-group col-sm-6">
                           <div class="student_img_show">
                               <label for="student_name"></label>
                               <img id="blah" src="{{asset('public/images')}}/logo/default-image.jpg"  class="img-fluid" alt="Student ID image" />
                           </div>
                       </div>
                      <div class="form-group col-sm-6">
                           <label for="slide_description">Slide Descripton<font color="#ff0000">*</font></label>
                           <input type="text" class="form-control" id="slide_description" name="slide_description" placeholder="Slide Descripton"  required="" data-validation-error-msg="news title is required">
                           {{$errors->first('slide_description')}}
                       </div>

                       <div class="form-group col-sm-3">
                           <div class="student_image">
                               <label for="student_name"></label>
                               <input type='file' class="form-control" id="photo" name="photo" onchange="readURL(this);" />
                               <i style="color:Red; font-size: 14px;">(Note : Width:80px Height:85px)</i>
                               {{$errors->first('student_name')}}
                           </div>
                       </div>
                       <div class="row">
                           <br>
                           <div class="form-group  col-xs-offset-2  col-sm-4">
                               <button type="submit" class="btn  btn-success">Add Category</button>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
           <!-- END Partial Table -->
       </div>
    </main>
    <!-- END Main Container -->
@endsection