
@extends('backend.candidate.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Basic -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Basic</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="example-text-input-sm">First Name</label>
                                    <input type="text" class="form-control form-control-sm" value="{{$candidate->first_name}}" id="" name="" placeholder="Text Input">
                                </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="example-text-input-sm">Middle Name</label>
                                    <input type="text" class="form-control form-control-sm" value="" id="middle_name" name="middle_name" placeholder="Middle Name">
                                </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="example-text-input-sm">Last Name</label>
                                    <input type="text" class="form-control form-control-sm" value="" id="last_name" name="middle_name" placeholder="Middle Name">
                                </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                            <div class="col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="example-text-input-sm">Date of Birth</label>
                                    <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                            <div class="col-lg-4 col-xl-4">
                                      <div class="form-group">
                                          <label for="example-text-input-sm">Password</label>
                                          <input type="password" class="form-control form-control-sm" id="example-password-input" name="example-password-input" placeholder="Password Input">
                                      </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                                  <div class="col-lg-4 col-xl-4">
                                      <div class="form-group">
                                          <label for="example-textarea-input">Textarea</label>
                                          <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                                      </div>
                            </div> {{--col-lg-4 col-xl-4 end--}}
                                  <div class="col-lg-4 col-xl-4">
                            </div> {{--col-lg-4 col-xl-4 end--}}
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Basic -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

@endsection