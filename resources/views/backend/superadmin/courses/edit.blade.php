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
                <li class="active">Faculty</li>
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Courses Title </th>
                                    <th>Select Faculty</th>
                                    <th>Actio</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <tr>
                                        <td>
                                            <input type="text" name="name" class="form-control" value="{{$courses->name}}">
                                        </td>
                                        <td>
                                            <select name="faculty_id" id="faculty_id" class="form-control">
                                                <option value="">Choose..</option>
                                                @foreach($faculty as $faculty)
                                                    <option value="{{$faculty->id}}" @if($courses->faculty_id == $faculty->id) selected @endif>{{$faculty->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="update" class="btn btn-primary btn-sm">Create</button>
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
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection