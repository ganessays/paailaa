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
                <li class="active"> Client Faculty</li>
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
            @if(session('error-msg'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-danger btn-xs">Error</span> {{session('error-msg')}}
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Choose Client</th>
                                    <th>Choose Faculty</th>
                                    <th>Actio</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <tr>
                                        <td>
                                            <select name="client_id" class="form-control">
                                                <option value="">Choose..</option>
                                                @foreach($clients as $client)
                                                    <option value="{{$client->id}}">{{$client->company_name}}</option>
                                                    @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="faculty_id" class="form-control">
                                                <option value="">Choose..</option>
                                                @foreach($faculties as $faculty)
                                                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm">Create</button>
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"> Client Faculty Listing</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Company Name</th>
                                    <th>Faculty Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clientFaculties as $key=>$value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->client->company_name}}</td>
                                    <td>{{$value->faculty->name}}</td>
                                    <td>fa</td>
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection