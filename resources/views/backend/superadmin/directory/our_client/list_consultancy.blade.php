
@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Consultancy List
            </h1>
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

        <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">All Collage</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>College Name</th>
                                        <th>Nature Type</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($consultancy as $key=> $collegeDatu)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$collegeDatu->company_name}}</td>
                                            <td>{{$collegeDatu->company_type}}</td>
                                            <td>{{$collegeDatu->user->email}}</td>
                                            <td>
                                                @if($collegeDatu->status == 'active')
                                                    <form action="{{url('superadmin/list-consultancy/'.$collegeDatu->id.'/updateClientStatus')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" value="2" name="status">
                                                        <button type="submit" class="btn btn-success btn-sm" title="Click here to InActive">Active</button>
                                                    </form>
                                                @else
                                                    <form action="{{url('superadmin/list-consultancy/'.$collegeDatu->id.'/updateClientStatus')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" value="1" name="status">
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Click here to Active">InActive</button>
                                                    </form>
                                                @endif

                                            </td>
                                            <td>{{$collegeDatu->pWord}}</td>
                                            <td>
                                                <a href="{{url('superadmin/list-consultancy/consultancy_id=').$collegeDatu->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('script')

@endsection