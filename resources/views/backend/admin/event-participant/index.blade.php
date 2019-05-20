
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event Wise Participants Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Event Wise Participants Listing</li>
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
                            <h3 class="box-title">Event Wise Participants Listing</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/transfer_participant')}}" class="btn btn-primary btn-xs">Transfer Participant to Event</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Event Details</th>
                                    <th>Participant Name</th>
                                    <th>Gender</th>
                                    <th>Contact No.</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($event_participants)>0)
                                    @foreach($event_participants as $key=>$event_participant)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$event_participant->event->name}} | {{$event_participant->event->location}} | {{$event_participant->event->start_at}}</td>
                                        <td>{{$event_participant->participant->first_name}} {{$event_participant->participant->last_name}}</td>
                                        <td>
                                        @if($event_participant->participant->gender =='m')Male
                                            @elseif($event_participant->participant->gender=='f')Female
                                            @else Other
                                            @endif
                                        </td>
                                        <td>{{$event_participant->participant->mobile}}</td>
                                        <td>
                                            <a href="{{url('admin/event-wise-participants/edit=').$event_participant->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/event-wise-participants/delete=').$event_participant->id}}" onclick="return confirm('Are you sure to delete this participant?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">Record Not Found ! Click Here to <a href="{{url('admin/transfer_participant')}}" class="btn btn-primary btn-sm">Transfer Participants to Event</a></td>
                                    </tr>
                                @endif
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