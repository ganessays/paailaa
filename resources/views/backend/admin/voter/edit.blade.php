
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Voter
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/voters')}}"><i class="fa fa-calendar-times-o"></i>Voter List</a></li>
                <li class="active">Edit Voter</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> Successfully
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
                        <div class="box-header">
                            <h3 class="box-title">Edit Voter</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/create-voter')}}" class="btn btn-primary btn-xs">Add New Voter</a></h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/voters')}}" class="btn btn-primary btn-xs">Voter List</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Personal Details</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="name" value="{{$voter->name}}" class="form-control" placeholder="Full Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="image">Profile Image</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <img src="{{url('public/uploads/voters').'/'.$voter->photo}}" alt="" style="width:50px;">
                                                        <input type="file" class="form-control" name="photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="m" @if($voter->gender =='m') selected @endif>Male</option>
                                                            <option value="f" @if($voter->gender=='f') selected @endif>Female</option>
                                                            <option value="o" @if($voter->gender=='o')selected @endif>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Date Of Birth</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="date" value="{{$voter->dob}}" class="form-control" name="dob" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Contact Details</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>District</label>
                                                <select name="district_id" class="form-control select2" style="width: 100%;">
                                                    @foreach($districts as $district)
                                                        <option value="{{$district->id}}" @if($district->id == $voter->district_id) selected @endif>{{$district->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$voter->address}}" class="form-control"  placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Mobile No.</label>
                                                <input type="number" name="mobile" value="{{$voter->mobile}}" class="form-control"  placeholder="Mobile No.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
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