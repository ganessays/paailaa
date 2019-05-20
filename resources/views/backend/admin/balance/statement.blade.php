
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Balance Statment of {{$user->voter->name}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Balance Statment </li>
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
                            <h3 class="box-title">Balance Statment</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/balance')}}" class="btn btn-primary btn-xs">Balance</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Date</th>
                                    <th>Incoming</th>
                                    <th>Outgoing</th>
                                    <th>Balance</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($balances as $key=>$balance)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$balance->date}}</td>
                                        <td>
                                        @if($balance->type=='incoming')
                                            NRs. {{$balance->amount}}/-
                                            @endif
                                        </td>
                                        <td>
                                        @if($balance->type=='outgoing')
                                            NRs. {{$balance->amount}}/-
                                            @endif
                                        </td>
                                        <td>
                                            NRs. {{$balance->total_amount}}/-
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