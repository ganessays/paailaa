
@extends('backend.client.index')
@section('body')
    <div class="client_news_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <div class="client_area_left_listing">
                            <h3>Facilities <a class="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add New Facilities</a></h3>
                        </div>
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
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Facilities</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($facilities as $key=>$facility)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$facility->facility->name}}</td>
                                <td>
                                    <img src="{{url('public/frontend/images/uploads/facility/images').'/'.$facility->facility->image}}" alt="" style="width:20px;">
                                </td>
                                <td>
                                    <a href="{{url('client/facilities/facilities=').$facility->id}}/delete"><i class="fa fa-trash" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    @include('backend.client.pages.post.sidebar')
                </div>
            </div>
            <!--------start modals ------------->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Facility</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('client/add_facilities')}}" method="post">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="facility_id">Choose Faciliaty</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="facility_id" id="facility_id" class="form-control input-sm">
                                            <option value="">Choose..</option>
                                            @foreach($facilities_all as $facilities_client)
                                                <option value="{{$facilities_client->id}}">{{$facilities_client->name}}</option>
                                            @endforeach
                                        </select>
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

        </div>
    </div>
@endsection