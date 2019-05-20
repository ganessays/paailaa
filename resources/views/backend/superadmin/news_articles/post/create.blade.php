@extends('backend.superadmin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Article Type
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Article Type</li>
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
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">Post title</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Faculty Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">Published date</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="date" name="start_at" id="start_at" class="form-control" placeholder="Faculty Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">Expiry date</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="date" name="end_at" id="end_at" class="form-control" placeholder="Faculty Name">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="status">Post Status <font color="#ff0000">*</font></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status" id="status" data-validation="required" data-validation-error-msg="Status is required" >
                                                <option value="">Post Status</option>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                                <option value="trash">Trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="type">Post Type <font color="#ff0000">*</font></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="type" id="type" data-validation="required" data-validation-error-msg="Post type required" >
                                                <option value="">Post Type</option>
                                                <option value="news">News</option>
                                                <option value="article">Article</option>
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
                                        <textarea id="editor1" name="detail" rows="10" cols="40"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""></label>
                                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
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