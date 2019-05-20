
@extends('backend.client.index')
@section('body')
    <div class="client_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="client_left_area">
                        <div class="client_area_left_listing">
                            <h3>List <a href="{{url('client/courses-fees')}}">Create New Course</a></h3>
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
                   <!-- /.col -->
                       <div class="col-xs-12">
                           <div class="box">
                               <!-- /.box-header -->
                               <div class="box-body">
                                   <table id="example1" class="table table-bordered table-striped">
                                       <thead>
                                       <tr>
                                           <th>S.N</th>
                                           <th>Course Name</th>
                                           <th>Courses Fees</th>
                                           <th>Action</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($client_course as $key=>$courses)
                                           <tr>
                                               <td>{{++$key}}</td>
                                               <td>@if(isset($courses->course->name)){{$courses->course->name}}@endif</td>
                                               <td>{{$courses->course_fee}}</td>
                                               <td>
                                                   <a href="{{url('client/courses-list/courses_id=').$courses->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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
                </div>
                <div class="col-md-4">
                    <div class="client_area_right">
                        <h2>Your Info <i class="fa fa-user"></i></h2>
                        <a class=" twPc-block" style="background-image: url('{{asset('public/frontend/images/uploads/college/banner')}}/{{$client->banner}}'); height: 200px"></a>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cllage_pfofile_image">
                                    <div class="twPc-button">
                                        <div class="top_feature_collage_view">
                                            <p>
                                                <i class="fa fa-eye"></i>3232
                                            </p>
                                        </div>
                                    </div>
                                    <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                                        <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$client->logo}}" class="twPc-avatarImg">
                                    </a>
                                    <div class="twPc-divUser">
                                        <div class="twPc-divName">
                                            <h2 class="client_name">{{$client->company_name}}</h2>
                                            <p>Address:{{$client->ddress}} </p>
                                            <p>Est:{{$client->com_establised}}</p>
                                            <p>User Name: {{$client->username}}</p>
                                            <p>Tel: {{$client->office_contact}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection