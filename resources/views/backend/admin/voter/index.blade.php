
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Voter Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Voter Listing</li>
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
                            <h3 class="box-title">Voter Listing</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/create-voter')}}" class="btn btn-primary btn-xs">Add New Voter</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($voters as $key=>$voter)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <img src="{{url('public/uploads/voters').'/'.$voter->photo}}" alt="" style="width:50px;">
                                        </td>
                                        <td>{{$voter->name}}</td>
                                        <td>
                                            @if($voter->gender=='m')Male
                                                @elseif($voter->gender=='f')Female
                                                @else Other
                                                @endif
                                        </td>
                                        <td>{{$voter->address}} @if(isset($voter->district->name)) {{$voter->district->name}} @endif</td>
                                        <td>{{$voter->mobile}}</td>
                                        <td>
                                            @php $years = \Illuminate\Support\Carbon::parse($voter->dob)->age; @endphp
                                            {{$years}}
                                        </td>
                                        <td>
                                            <a href="{{url('admin/voters/edit=').$voter->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/voters/delete=').$voter->id}}" onclick="return confirm('Are you sure to delete this voter? User Account Also Deleted')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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