
@extends('backend.client.index')
@section('body')
    <div class="client_news_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <div class="client_area_left_listing">
                            <h3>Create New Post  <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add New Image  </a> &nbsp; <a href="#" data-toggle="modal" data-target="#galleryCatModal"><i class="fa fa-plus"></i> Add Gallery Category</a></h3>
                        </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galleries as $key=>$gallery)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>
                                    <img src="{{url('public/uploads/gallery').'/'.$gallery->image}}" alt="" style="width:50px;">
                                </td>
                                <td>
                                    @if(isset($gallery->client_gallery_cat->name))
                                        {{$gallery->client_gallery_cat->name}} <a href="{{url('Client/galleries/cat_id=').$gallery->client_gallery_cat->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('client/galleries/galleries=').$gallery->id}}/delete"><i class="fa fa-trash" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!--------start modals ------------->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{url('client/add_galleries')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="facility_id">Choose Images</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="file" id="file-multiple-input" name="file[]" multiple="" class="form-control-file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="cat_id">Category</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="cat_id" id="cat_id" class="form-control input-sm">
                                                            <option value="">Choose Category</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--//model-form-->

                    <!-- Modal -->
                    <div class="modal fade" id="galleryCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{url('client/add_gallery_cat')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="facility_id">Category Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"  name="name" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--//model-form-->
                </div>
                <div class="col-md-4">
                    @include('backend.client.pages.post.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection