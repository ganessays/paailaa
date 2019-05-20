@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Facility
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Facility</li>
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
                <div class="col-sm-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Facility Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{$facility->name}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Icon</label>
                                            <input type="text" name="icon" id="icon" class="form-control" value="{{$facility->icon}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for=""></label>
                                            <input id="image" name="image" class="btn btn-warning" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{url('public/frontend/images/uploads/facility/images').'/'.$facility->image}}" alt="Facility Images" style="max-width: 100%; max-height: 80px;">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="update" class="btn btn-primary btn-sm">Update</button>
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