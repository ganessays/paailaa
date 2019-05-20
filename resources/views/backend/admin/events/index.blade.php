
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Event Listing</li>
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
                        <div class="box-header">
                            <h3 class="box-title">Event Listing</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Image</th>
                                    <th>Event Title</th>
                                    <th>Start Time</th>
                                    <th>Venue</th>
                                    <th>Post By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $key=>$event)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <img src="{{url('public/uploads/events').'/'.$event->image}}" alt="" style="width:50px;">
                                        </td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->start_at}}</td>
                                        <td>{{$event->district->name}} {{$event->location}}</td>
                                        <td>{{$event->user->name}}</td>
                                        <td>
                                            @if($event->status==0)
                                                <a href="#" class="btn btn-warning btn-xs">Draft</a>
                                                @else
                                                <a href="#" class="btn btn-success btn-xs">Published</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/list-events/event_id=').$event->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/list-events/event_id=').$event->id.'/delete'}}" onclick="return confirm('Are you sure to delete this event?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('script')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection