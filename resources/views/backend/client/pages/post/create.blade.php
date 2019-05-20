
@extends('backend.client.index')
@section('body')
    <script src="{{url('public/server/bower_components/ckeditor/ckeditor.js')}}"></script>
    <div class="client_news_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <div class="client_area_left_listing">
                            <h3>Create New Post <a href="{{url('client/list-post')}}"> Lis Post</a></h3>
                        </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="">Post title</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Post Title">
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
                                <div class="col-sm-2">
                                    <label for="image">Feature Image</label>
                                </div>
                                <div class="col-sm-10">
                                    <input id="image" name="image" class="btn btn-warning btn-sm" type="file">
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

                        <div class="form-group col-sm-12">
                            <label for="">Post Details</label>
                            <textarea class="form-control content" id="editor1" name="detail"></textarea>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    @include('backend.client.pages.post.sidebar')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection