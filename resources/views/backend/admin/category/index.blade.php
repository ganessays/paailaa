
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Categories</li>
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
                @if(\Illuminate\Support\Facades\Session::has('cat_id'))
                    @php $cat=\App\Category::find(\Illuminate\Support\Facades\Session::get('cat_id')); @endphp
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title" style="color:Red; font-weight: bolder;">Unable to Delete ! Category Use on Following Events !!</h3>
                                {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Events Name</th>
                                        <th>Used Category</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $events = \App\Event::where('cat_id',$cat->id)->get(); @endphp
                                        @foreach($events as $key=>$event)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td><a href="{{url('admin/list-events/event_id=').$event->id.'/edit'}}" title="Click here to view event details">{{$event->name}}</a></td>
                                                <td>{{$cat->name}}</td>
                                            </tr>
                                        @endforeach
                                    <tr>
                                        <td colspan="4">Note : If you delete this category then related Event will be delete automaticly ! Deleted item not able to restore!!</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <a class="btn btn-success btn-sm" href="{{url('admin/categories/cat_id=').$cat->id.'/confirmed'}}" onclick="return confirm('Are you sure? Related Events will be deleted Automaticly')">Confirm To Delete All Record?</a>
                                            <a class="btn btn-primary btn-sm" href="{{url('admin/categories/cat_id=').$cat->id.'/edit'}}">Edit this Category?</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                @endif


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Create New Category</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="{{url('admin/post_cat')}}" method="post">
                                    {{csrf_field()}}
                                    <tr>
                                        <td>
                                            <input type="text" name="name" class="form-control" placeholder="Insert New Category Name">
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
                            <h3 class="box-title">Category Listing</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $key=>$category)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <a href="{{url('admin/categories/cat_id=').$category->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/categories/cat_id=').$category->id.'/delete'}}" onclick="return confirm('Are you sure to delete this category?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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