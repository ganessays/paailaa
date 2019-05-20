
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Event
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list_events')}}"><i class="fa fa-calendar-times-o"></i> Event Listing</a></li>
                <li class="active">Create New Event</li>
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
                            <h3 class="box-title">New Event</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/categories')}}" class="btn btn-primary btn-xs">Category</a></h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/list-events')}}" class="btn btn-primary btn-xs">Event Listing</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Event Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Event Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Event Image</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Voting Price</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="number" name="voting_rate" class="form-control"  placeholder="Event Voting Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="cat_id" id="cat_id" class="form-control">
                                                    <option value="">Un-Categorized</option>
                                                    @foreach($cat as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Event Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1">Publish</option>
                                                    <option value="0">Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="border-bottom: 1px solid grey;">Event Location</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>District</label>
                                                <select name="district_id" class="form-control select2" style="width: 100%;">
                                                    @foreach($districts as $district)
                                                        <option value="{{$district->id}}" @if($district->name == 'Kathmandu') selected @endif>{{$district->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control"  placeholder="Event Location">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="border-bottom: 1px solid grey;">Event Duration</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>From</label>
                                                <input type="datetime-local" name="start_at" class="form-control" placeholder="Event Start Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input type="datetime-local" name="end_at" class="form-control" placeholder="Event End Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box box-info">
                                        <div class="box-header">
                                            <h3 class="box-title">Event Description
                                            </h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body pad">
                                            <form>
                    <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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