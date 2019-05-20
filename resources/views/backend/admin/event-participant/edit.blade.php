
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Event Wise Participants
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/event-wise-participants')}}"><i class="fa fa-calendar-times-o"></i>Event Wise Participants</a></li>
                <li class="active">Edit Event Wise Participants</li>
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
                            <h3 class="box-title">Edit Event Wise Participants</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/event-wise-participants')}}" class="btn btn-primary btn-xs">Event Wise Participants</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Choose Event</label>
                                                    </div>
                                                </div>
                                        <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="event_id" id="event_id" class="form-control">
                                                            <option value="">Choose..</option>
                                                            @foreach($events as $event)
                                                                <option value="{{$event->id}}" @if($event->id == $event_participant->event_id) selected @endif>{{$event->name}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                    </div>
                                 </div>
                                <div class="col-md-8">
                                    <table class="table table-responsive table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Participants Name</th>
                                            <th>Contact</th>
                                            <th>Choose</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{$event_participant->participant->first_name}}</td>
                                            <td>{{$event_participant->participant->mobile}}</td>
                                            <td>
                                                <input type="checkbox" checked disabled="disabled">
                                            </td>
                                        </tr>
                                    </table>
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