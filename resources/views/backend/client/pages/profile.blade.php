
@extends('backend.client.index')
@section('body')
    <script src="{{url('public/server/bower_components/ckeditor/ckeditor.js')}}"></script>
    <div class="client_profile_content">
       <div class="container">
           <h2>Profile</h2>
           <form action="" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
               <div class="row">
                   <div class="col-md-8">
                       <div class="row">
                           <div class="form-group col-md-2">
                               <label for="College_name">Full Name <font color="#ff0000">*</font></label>
                           </div>
                           <div class="form-group col-md-10">
                               <input type="text" class="form-control" id="College_name" name="College_name"  value="{{$CollegeData->company_name}}" data-validation="required" data-validation-error-msg="College name is required">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-2">
                               <label for="College_nature">Nature Of College <font color="#ff0000">*</font></label>
                           </div>
                           <div class="form-group col-md-4">
                               <select class="form-control" name="College_nature_id" id="College_nature_id" data-validation="required" data-validation-error-msg="College nature is required" >
                                   <option value="">Select Nature of College</option>
                                   @foreach($Nature as $categories)
                                       <option value="{{$categories->id}}" {{ ($CollegeData->company_nature_id == $categories->id) ? ' selected' : '' }}>{{$categories->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group col-sm-2">
                               <label for="College_nature"> Type <font color="#ff0000">*</font></label>
                           </div>
                           <div class="form-group col-sm-4">
                               <select class="form-control" name="College_type" id="College_type" data-validation="required" data-validation-error-msg="Status is required" >
                                   <option value="">Select College Type</option>
                                   <option value="general" @if($CollegeData->company_type=='general') selected @endif>General</option>
                                   <option value="featured"  @if($CollegeData->company_type=='featured') selected @endif>Featured</option>
                                   <option value="sponser"  @if($CollegeData->company_type=='sponser') selected @endif>Sponser</option>
                               </select>
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-sm-2">
                               <label for="district_id">College State/District <font color="#ff0000">*</font></label>
                           </div>
                           <div class="form-group col-sm-4">
                               <select name="district_id" id="district_id" class="form-control">
                                   <option value="">Select District</option>
                                   @foreach($District as $districts)
                                       <option value="{{$districts->id}}" @if($CollegeData->district_id== $districts->id) selected @endif>{{$districts->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group col-sm-2">
                               <label for="office_contact">Office Contact</label>
                           </div>
                           <div class="form-group col-sm-4">
                               <input type="text" name="office_contact" class="form-control" id="office_contact" value="{{$CollegeData->office_contact}}">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-2">
                               <label for="College_address">Address</label>
                           </div>
                           <div class="form-group col-md-10">
                               <input type="text" class="form-control" id="College_address" name="College_address" value="{{$CollegeData->address}}">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-2">
                               <label for="website">College Website</label>
                           </div>
                           <div class="form-group col-md-4">
                               <input type="text" name="website" class="form-control" id="website" value="{{$CollegeData->website}}">
                           </div>
                           <div class="form-group col-md-2">
                               <label for="contact_person">Contact Person</label>
                           </div>
                           <div class="form-group col-md-4">
                               <input type="text" name="contact_person"  class="form-control"  id="contact_person" value="{{$CollegeData->contact_person}}">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-2">
                               <label for="mobile">Mobile</label>
                           </div>
                           <div class="form-group col-md-10">
                               <input type="text" name="mobile"  class="form-control"  id="mobile" value="{{$CollegeData->mobile}}">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-2">
                               <label for="College_nature">Status</label>
                           </div>
                           <div class="col-md-4">
                               <select class="form-control" name="status" id="status">
                                   <option value="2" @if($CollegeData->status == 'active') selected @endif>Active</option>
                                   <option value="1" @if($CollegeData->status == 'inactive') selected @endif>InActive</option>
                               </select>
                           </div>
                           <div class="col-md-2">
                               <label for="College_nature">College Established Date</label>
                           </div>
                           <div class="col-md-4">
                               <input type="date" name="com_establised"  class="form-control" value="{{$CollegeData->com_establised}}">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-12">
                               <label for="College_profile">College Profile; </label>
                               <textarea class="form-control content" id="editor1" name="College_profile" placeholder="College profile" >{{$CollegeData->company_profile}}</textarea>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-4">
                       <div class="row">
                           <div class="form-group col-md-3">
                               <label for="photo">Logo</label>
                           </div>
                           <div class="form-group col-md-9">
                               <i style="font-size: 13px; color: red;">(Minimum Size: width:100px height: 100px)</i>
                               <img src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$CollegeData->logo}}" alt="logo" style="max-width: 100%; max-height: 200px;">
                               <input id="logo" name="logo" type="file">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-3">
                               <label for="photo">Feature Images</label>
                           </div>
                           <div class="form-group col-md-9">
                               <img src="{{asset('public/frontend/images/uploads/college/feature')}}/{{$CollegeData->featured_image}}" alt="featured image" style="max-width: 100px; max-height: 80px;">
                               <input id="featured_image" name="featured_image" type="file">
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-3">
                               <label for="photo">Banner</label>
                           </div>
                           <div class="form-group col-md-9">
                               <img src="{{asset('public/frontend/images/uploads/college/banner')}}/{{$CollegeData->banner}}" alt="Banner" style="max-width: 100px; max-height: 80px;">
                               <i style="font-size: 13px; color:red;">(Minimum Size: width:1300px height: 350px)</i>
                               <input id="banner" name="banner" type="file">
                           </div>
                       </div>


                   </div>
               </div>

               <div class="row">

                   <div class="row">
                       <div class="form-group  col-xs-offset-4  col-sm-4">
                           <button type="update" class="btn  btn-primary">Update</button>
                       </div>
                   </div>
               </div>
           </form>
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