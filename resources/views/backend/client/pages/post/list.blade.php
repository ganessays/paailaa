
@extends('backend.client.index')
@section('body')
    <div class="client_news_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <div class="client_area_left_listing">
                            <h3>Create New Post <a href="{{url('client/create-post')}}"> Create New Post</a></h3>
                        </div>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">All Post</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Post Title</th>
                                                <th>Post Type</th>
                                                <th>Publish Date</th>
                                                <th>Expiry Date</th>
                                                <th>Post Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($postData as $key=> $postData)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$postData->title}}</td>
                                                    <td>{{$postData->type}}</td>
                                                    <td>{{$postData->start_at}}</td>
                                                    <td>{{$postData->status}}</td>
                                                    <td>{{$postData->end_at}}</td>
                                                    <td>
                                                        <a href="{{url('client/list-post/post-edit=').$postData->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                        <a href="{{url('client/list-post/post-delete=').$postData->id.'/delete'}}" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" title="Delete"></i></a>
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
                        <!-- /.row -->
                    </section>
                    <!-- /.content -->

                </div>
                <div class="col-md-4">
                    @include('backend.client.pages.post.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection