@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Post
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('superadmin/list-post')}}"><i class="fa fa-dashboard"></i> List Post</a></li>
                <li class="active">Edit Post</li>
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
                <div class="col-sm-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="">Events title</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" id="name" class="form-control" value="{{$events->name}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Published date</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="start_at" id="start_at" class="form-control" value="{{$events->start_at}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Expiry date</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="end_at" id="end_at" class="form-control" value="{{$events->end_at}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Country</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="country_id" id="country_id" data-validation="required" data-validation-error-msg="Country is required" >
                                                @foreach($country as $Countries)
                                                    <option value="{{$Countries->id}}" @if($Countries->id ==$events->country_id) selected @endif>{{$Countries->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Venue</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="venue" id="venue" class="form-control" value="{{$events->venue}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="event_type_id">Events Type <font color="#ff0000">*</font></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="event_type_id" id="event_type_id" data-validation="required" data-validation-error-msg="Status is required" >
                                                @foreach($eventTypes as $type)
                                                    <option value="{{$type->id}}" @if($type->id ==$events->event_type_id) selected @endif >{{$type->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Price</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="number" name="price" id="price" class="form-control" value="{{$events->price}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="status">Events Status <font color="#ff0000">*</font></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status" id="status" data-validation="required" data-validation-error-msg="Status is required" >
                                                <option value="publish" @if($events->status =='publish') selected @endif>Publish</option>
                                                <option value="draft" @if($events->status =='draft') selected @endif>Draft</option>
                                                <option value="trash" @if($events->status =='trash') selected @endif>Trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="image">Feature Image</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="image" name="image" class="btn btn-warning" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Post Details</label>
                                    <textarea id="editor1" name="detail" rows="10" cols="40">{!! $events->detail !!}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for=""></label>
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
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