
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Balance Request
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Balance Request</li>
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
                            <h3 class="box-title">Balance Request</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/balance')}}" class="btn btn-primary btn-xs">View Balance</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Date</th>
                                    <th>Request From</th>
                                    <th>Photo</th>
                                    <th>Contact No.</th>
                                    <th>Requested Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($request_balances as $key=>$request_balance)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{date('Y-M-d',strtotime($request_balance->created_at))}}</td>
                                        <td>{{$request_balance->user->voter->name}}</td>
                                        <td><img src="{{url('public/uploads/voters').'/'.$request_balance->user->voter->photo}}" alt="" style="width: 50px; border-radius: 100%;"></td>
                                        <td>{{$request_balance->user->voter->mobile}}</td>
                                        <td>NRs. {{$request_balance->amount}}/-</td>
                                        <td>
                                            @if($request_balance->status==0)
                                                <button class="btn btn-danger btn-sm">Rejected</button>
                                                @else
                                                <button class="btn btn-success btn-sm">Accepted</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($request_balance->action_mode=='paid')
                                                <button class="btn btn-success btn-sm">Balance Paid</button>
                                                @else
                                            @if($request_balance->status==0)
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-success{{$request_balance->id}}">Review</button>
                                                    <div class="modal modal-primary fade" id="modal-success{{$request_balance->id}}">
                                                        <div class="modal-dialog" style="width: 66%;">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title">Balance Release Form</h4>
                                                                </div>
                                                                <form action="{{url('admin/balance_release_post').'/'.$request_balance->id}}" method="post">
                                                                    {{csrf_field()}}
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 form-group" style="text-align: center;">
                                                                                <img src="{{url('public/uploads/voters').'/'.$request_balance->user->voter->photo}}" alt="" style="width: 100px;" class="img-thumbnail">
                                                                                <h4>{{$request_balance->user->voter->name}} ({{$request_balance->user->role->name}})</h4>
                                                                                <h5>{{$request_balance->user->voter->mobile}}</h5>
                                                                            </div>
                                                                            <div class="col-sm-6 form-group">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label for="">Requested Amount</label>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" disabled class="form-control" value="NRs. {{$request_balance->amount}}/-">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 form-group">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label for="">Approved Amount</label>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="number" name="amount" class="form-control" value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-outline">Confirm Request</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                                                @else
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-success{{$request_balance->id}}">View</button>
                                                <form action="{{url('admin/balance_request_status').'/'.$request_balance->id}}" method="post" style="display: inline-block;">
                                                    {{csrf_field()}}
                                                    <button type="submit" onclick="return confirm('Are you sure to reject this request?')" class="btn btn-danger btn-sm">Reject</button>
                                                </form>
                                                <div class="modal modal-primary fade" id="modal-success{{$request_balance->id}}">
                                                    <div class="modal-dialog" style="width: 66%;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title">Balance Release Form</h4>
                                                            </div>
                                                            <form action="{{url('admin/balance_release_post').'/'.$request_balance->id}}" method="post">
                                                                {{csrf_field()}}
                                                                <div class="modal-body">
                                                                 <div class="row">
                                                                    <div class="col-sm-12 form-group" style="text-align: center;">
                                                                        <img src="{{url('public/uploads/voters').'/'.$request_balance->user->voter->photo}}" alt="" style="width: 100px;" class="img-thumbnail">
                                                                        <h4>{{$request_balance->user->voter->name}} ({{$request_balance->user->role->name}})</h4>
                                                                        <h5>{{$request_balance->user->voter->mobile}}</h5>
                                                                    </div>
                                                                     <div class="col-sm-6 form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label for="">Requested Amount</label>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" disabled class="form-control" value="NRs. {{$request_balance->amount}}/-">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                     <div class="col-sm-6 form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label for="">Approved Amount</label>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="number" name="amount" class="form-control" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-outline">Confirm Request</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->

                                            @endif
                                            @endif

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