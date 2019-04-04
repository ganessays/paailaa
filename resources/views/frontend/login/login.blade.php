@extends('frontend.welcome')
@section('body')
    <!-- Start Home Page Slider -->
    <section id="login-section">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-2">
                    <div class="why_sign_up">
                        <h3>Why Sign Up?</h3>
                       <ul class="why_list_s">
                           <li><i class="fa fa-user"></i> View College Brochures</li>
                           <li><i class="fas fa-hand-point-right"></i> Check Detailed Fees</li>
                           <li><i class="fas fa-hand-point-right"></i> Shortlist and Apply to colleges</li>
                           <li><i class="fas fa-hand-point-right"></i> Ask Questions to senior Counselors</li>
                           <li><i class="fas fa-hand-point-right"></i> Never miss Important deadlines</li>
                       </ul>
                    </div>
                </div>

                <div class="col-md-6 login-form-1">
                    <h3> <i class="fa fa-user-plus"></i> Register</h3>
                    @if(session('success'))
                        <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                        <ul  class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{url('register')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder=" Only First Name" value="{{old('first_name')}}" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email *" value="{{old('email')}}" required="" />
                        </div>
                         <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="User Name *" value="{{old('name')}}" required="" :formnovalidate="" >

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                         <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-secondary" value="Register" />
                        </div>
                    </form>  
                    Already A Member? <a href="#" style="color: blue;font-size: 17px;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login here</a> it's Easy.
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="margin-top: 100px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Member Login</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('login')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                           <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-user-plus"></i> Register</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Page Slider -->


@endsection