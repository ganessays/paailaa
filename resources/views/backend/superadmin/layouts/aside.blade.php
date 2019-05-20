@section('aside')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('public/avatar0.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                {{--Company Nature--}}
                <li class="treeview <?php if(request()->segment('2') =='company-nature' || request()->segment('2') =='company-nature'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Company Nature</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='company-nature'){ echo 'active' ;} ?>"><a href="{{url('superadmin/company-nature')}}"><i class="fa fa-adjust"></i>Nature of Company</a></li>
                    </ul>
                </li>
                {{--University end--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-university' || request()->segment('2') =='add-university' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>University</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-university'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-university')}}"><i class="fa fa-circle-o"></i> List University</a></li>
                        <li class="<?php if(request()->segment('2') =='add-university'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-university')}}"><i class="fa fa-circle-o"></i>Add University</a></li>
                    </ul>
                </li>
                {{--College end--}}
                <li class="treeview  <?php if(request()->segment('2') =='add-college' || request()->segment('2') =='list-college' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>College</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-college'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-college')}}"><i class="fa fa-circle-o"></i> List College</a></li>
                        <li class="<?php if(request()->segment('2') =='add-college'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-college')}}"><i class="fa fa-circle-o"></i> Add College</a></li>
                    </ul>
                </li>
                {{--Consultancy--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-consultancy' || request()->segment('2') =='add-consultancy'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>Consultancy</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-consultancy'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-consultancy')}}"><i class="fa fa-circle-o"></i> List Consultancy</a></li>
                        <li class="<?php if(request()->segment('2') =='add-consultancy'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-consultancy')}}"><i class="fa fa-circle-o"></i>Add Consultancy</a></li>
                    </ul>
                </li>

                {{--Consultancy--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-school' || request()->segment('2') =='add-school' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>School</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if(request()->segment('2') =='list-school'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-school')}}"><i class="fa fa-circle-o"></i>List School</a></li>
                        <li class=" <?php if(request()->segment('2') =='add-school'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-school')}}"><i class="fa fa-circle-o"></i> Add School</a></li>
                    </ul>
                </li>

                <li class="treeview <?php if(request()->segment('2') =='add-event' || request()->segment('2') =='add-event-type' || request()->segment('2') =='list-event'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Create Events</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-event'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-event')}}"><i class="fa fa-circle-o"></i>List Event</a></li>
                        <li class=" <?php if(request()->segment('2') =='add-event'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-event')}}"><i class="fa fa-circle-o"></i>Add Event</a></li>
                        <li class=" <?php if(request()->segment('2') =='add-event-type'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-event-type')}}"><i class="fa fa-circle-o"></i>Add Event Type</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='countries' || request()->segment('2') =='states'
                    || request()->segment('2') =='district'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Location Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='countries'){ echo 'active' ;} ?>"><a href="{{url('superadmin/countries')}}"><i class="fa fa-circle-o"></i>Countries</a></li>
                        <li class=" <?php if(request()->segment('2') =='states'){ echo 'active' ;} ?>"><a href="{{url('superadmin/states')}}"><i class="fa fa-circle-o"></i>States</a></li>
                        <li class=" <?php if(request()->segment('2') =='district'){ echo 'active' ;} ?>"><a href="{{url('superadmin/district')}}"><i class="fa fa-circle-o"></i>district</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='add-faculty' || request()->segment('2') =='add-courses'|| request()->segment('2') =='client-faculty'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Courses & Faculty Manage</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='add-faculty'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-faculty')}}"><i class="fa fa-circle-o"></i> Add/List faculty</a></li>
                        <li class=" <?php if(request()->segment('2') =='add-courses'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-courses')}}"><i class="fa fa-circle-o"></i>Add/List Courses</a></li>
                        <li class=" <?php if(request()->segment('2') =='client-faculty'){ echo 'active' ;} ?>"><a href="{{url('superadmin/client-faculty')}}"><i class="fa fa-circle-o"></i>Client Faculty</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='add-facility'|| request()->segment('2') =='list-facility'){ echo 'active menu-open';} ?>">
                    <a href="#"><i class="fa fa-paste"></i> <span>Facility</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='add-facility'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-facility')}}"><i class="fa fa-circle-o"></i>Add Facility</a></li>
                        <li class=" <?php if(request()->segment('2') =='list-facility'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-facility')}}"><i class="fa fa-circle-o"></i>list Facility</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='create-post' || request()->segment('2') =='list-post'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-paste"></i> <span>Post</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='create-post'){ echo 'active' ;} ?>"><a href="{{url('superadmin/create-post')}}"><i class="fa fa-circle-o"></i>Create Post</a></li>
                        <li class=" <?php if(request()->segment('2') =='list-post'){ echo 'active' ;} ?>"><a href="{{url('superadmin/list-post')}}"><i class="fa fa-circle-o"></i>List Post</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='add-tag'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-paste"></i> <span>Add Tag</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='add-tag'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-tag')}}"><i class="fa fa-circle-o"></i>Add/Edit tag</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='add-category' || request()->segment('2') =='add-event-type'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-picture-o"></i> <span>News & Article</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='add-category'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-category')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                        <li class=" <?php if(request()->segment('2') =='add-event-type'){ echo 'active' ;} ?>"><a href="{{url('superadmin/add-event-type')}}"><i class="fa fa-circle-o"></i>Add Events Type</a></li>
                    </ul>
                </li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


@endsection