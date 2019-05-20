@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Faculty
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
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Faculty Name">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Icon</label>
                                            <input type="text" name="icon" id="icon" class="form-control" placeholder="Icon">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="image">Feature Image</label>
                                            <input id="image" name="image" class="btn btn-warning" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary btn-sm">Create</button>
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
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Facility</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Facility Title</th>
                                    <th>Facility Icon</th>
                                    <th>Facility Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($facility as $key=> $facility)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$facility->name}}</td>
                                        <td>{{$facility->icon}}</td>
                                        <td> <img src="{{url('public/frontend/images/uploads/facility/images').'/'.$facility->image}}" alt="Facility Images" style="max-width: 50px; max-height: 30px;"></td>
                                        <td>
                                            <a href="{{url('superadmin/list-facility/facility_id=').$facility->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection