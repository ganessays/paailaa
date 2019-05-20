
@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Client Details
                @if(request()->segment('2') =='add-college') College
                @elseif(request()->segment('2') =='add-consultancy') Consultancy
                @elseif(request()->segment('2') =='add-university') Consultancy
                @elseif(request()->segment('2') =='add-school') School
                @else
                @endif
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list_events')}}"><i class="fa fa-calendar-times-o"></i> Event Listing</a></li>
                <li class="active">Add New
                    @if(request()->segment('2') =='add-college') Collegesss
                    @elseif(request()->segment('2') =='add-consultancy') Consultancy
                        @else
                    @endif
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            @if($errors->any())
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        @foreach($errors->all() as $error)
                            <span class="btn btn-danger btn-xs">Error</span> {{$error}}<br>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif


            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_name">Full Name <font color="#ff0000">*</font></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="College_name" name="College_name"  value="{{$CollegeData->company_name}}" data-validation="required" data-validation-error-msg="College name is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="name">User Name <font color="#ff0000">*</font></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" class="form-control" value="{{$CollegeData->username}}" data-validation="required" data-validation-error-msg="User Name Required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_nature">Nature<font color="#ff0000">*</font></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="College_nature_id" id="College_nature_id" data-validation="required" data-validation-error-msg="College nature is required" >
                                                    <option value="">Select Nature of College</option>
                                                    @foreach($Nature as $categories)
                                                        <option value="{{$categories->id}}" {{ ($CollegeData->company_nature_id == $categories->id) ? ' selected' : '' }}>{{$categories->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_nature">College Type <font color="#ff0000">*</font></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="College_type" id="College_type" data-validation="required" data-validation-error-msg="Status is required" >
                                                    <option value="">Select College Type</option>
                                                    <option value="general" @if($CollegeData->company_type=='general') selected @endif>General</option>
                                                    <option value="featured"  @if($CollegeData->company_type=='featured') selected @endif>Featured</option>
                                                    <option value="sponser"  @if($CollegeData->company_type=='sponser') selected @endif>Sponser</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="district_id">College State/District <font color="#ff0000">*</font></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select name="district_id" id="district_id" class="form-control">
                                                    <option value="">Select District</option>
                                                    @foreach($District as $districts)
                                                        <option value="{{$districts->id}}" @if($CollegeData->district_id== $districts->id) selected @endif>{{$districts->name}}</option>
                                                    @endforeach
                                                </select>
                                                <i>District Not Found? <a href="#">Click here</a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_address">College Address</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="College_address" name="College_address" value="{{$CollegeData->address}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="office_contact">Office Contact</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="office_contact" class="form-control" id="office_contact" value="{{$CollegeData->office_contact}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="website">College Website</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="website" class="form-control" id="website" value="{{$CollegeData->website}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="contact_person">Contact Person</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="contact_person"  class="form-control"  id="contact_person" value="{{$CollegeData->contact_person}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mobile">Mobile</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="mobile"  class="form-control"  id="mobile" value="{{$CollegeData->mobile}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="photo">Logo</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <i style="font-size: 13px; color: red;">(Minimum Size: width:100px height: 100px)</i>
                                                <img src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$CollegeData->logo}}" alt="logo" style="max-width: 100px; max-height: 80px;">
                                                <input id="logo" name="logo" class="btn btn-warning" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="photo">Feature Images</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <img src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$CollegeData->logo}}" alt="logo" style="max-width: 100px; max-height: 80px;">
                                                <input id="featured_image" name="featured_image" class="btn btn-warning" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="photo">Banner</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <img src="{{asset('public/frontend/images/uploads/college/banner')}}/{{$CollegeData->banner}}" alt="logo" style="max-width: 100px; max-height: 80px;">
                                                <i style="font-size: 13px; color:red;">(Minimum Size: width:1300px height: 350px)</i>
                                                <input id="banner" name="banner" class="btn btn-warning" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="form-group col-sm-6">--}}
                                    {{--<label for="email">Email Address <font color="#ff0000">*</font> </label>--}}
                                    {{--<input type="text" name="email" class="form-control"  value="{{$employer->user->email}}" id="email" placeholder="" data-validation="required" data-validation-type="email" data-validation-error-msg="Contact email is required"  >--}}
                                    {{--</div>--}}

                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_nature">Status</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="status" id="status">
                                                    <option value="1" @if($CollegeData->status == 'inactive') selected @endif>InActive</option>
                                                    <option value="2" @if($CollegeData->status == 'active') selected @endif>Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="College_nature">College Established Date</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="date" name="com_establised"  class="form-control" value="{{$CollegeData->com_establised}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label for="College_profile">College Profile; </label>
                                        <textarea class="form-control content" id="editor1" name="College_profile" placeholder="College profile" >{!! $CollegeData->company_profile !!}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="form-group  col-xs-offset-4  col-sm-4">
                                            <button type="update" class="btn  btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('script')

@endsection