@extends('Admin.index')
@section('body')
    <!-- Main Container -->
  <div class="main_page" style="margin-top: 80px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="block-content block-content-full">
                      <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                          <div class="row push">
                              <div class="col-md-9 col-xl-9">
                                  <div class="form-group">
                                      <label for="example-text-input">News Title</label>
                                      <input type="text" class="form-control" id="news_title" name="news_title" placeholder="News Title">
                                  </div>
                                  <div class="form-group">
                                      <label for="example-textarea-input">Content</label>
                                      <textarea id="js-ckeditor" name="bodyNews">Hello CKEditor!</textarea>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="example-text-input">Publish Date</label>
                                              <input type="date" class="form-control" id="" name="" placeholder="News Title">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="example-text-input">Expiry Date</label>
                                              <input type="date" class="form-control" id="" name="" placeholder="News Title">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xl-3">
                                  <div class="form-group">
                                      <label for="example-text-input">Status</label>
                                      <input type="radio" name="news_status" value="publish">Publish
                                      <input type="radio" name="news_status" value="draft">Draft
                                  </div>
                                  <div class="form-group">
                                      <label for="example-text-input">News Category</label>
                                      <select name="cat_id" id="" class="form-control">
                                          <option value="">Choose</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_img_show">
                                          <label for="student_name"></label>
                                          <img id="blah" src="{{asset('public/client/images')}}/logo/default-image.jpg"  class="img-fluid" alt="Feature Image">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_image">
                                          <label for="student_name"></label>
                                          <input type='file' class="form-control" id="photo" name="photo" onchange="readURL(this);" />
                                          <i style="color:Red; font-size: 14px;">(Note : Width:80px Height:85px)</i>
                                          {{$errors->first('student_name')}}
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="example-text-input"></label>
                                      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- END Main Container -->
@endsection