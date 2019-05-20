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
                <li class="treeview">
                    <a href="#"><i class="fa fa-user"></i> <span>Users</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Admin</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Event Manager</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Voters</a></li>
                    </ul>
                </li>
                <li class="header">PAAILAA DIRECTORY MANAGEMENT</li>
                {{--College end--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-events' || request()->segment('2') =='create-events' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>College</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-events'){ echo 'active' ;} ?>"><a href="{{url('admin/list-events')}}"><i class="fa fa-circle-o"></i> Add College</a></li>
                        <li class="<?php if(request()->segment('2') =='create-events'){ echo 'active' ;} ?>"><a href="{{url('admin/create-events')}}"><i class="fa fa-circle-o"></i>List College</a></li>
                    </ul>
                </li>
                {{--Consultancy--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-events' || request()->segment('2') =='create-events' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>Consultancy</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-events'){ echo 'active' ;} ?>"><a href="{{url('admin/list-events')}}"><i class="fa fa-circle-o"></i> Add Consultancy</a></li>
                        <li class="<?php if(request()->segment('2') =='create-events'){ echo 'active' ;} ?>"><a href="{{url('admin/create-events')}}"><i class="fa fa-circle-o"></i>List Consultancy</a></li>
                    </ul>
                </li>

                {{--Consultancy--}}
                <li class="treeview  <?php if(request()->segment('2') =='list-events' || request()->segment('2') =='create-events' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>School</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-events'){ echo 'active' ;} ?>"><a href="{{url('admin/list-events')}}"><i class="fa fa-circle-o"></i> Add School</a></li>
                        <li class="<?php if(request()->segment('2') =='create-events'){ echo 'active' ;} ?>"><a href="{{url('admin/create-events')}}"><i class="fa fa-circle-o"></i>List School</a></li>
                    </ul>
                </li>

                <li class="treeview <?php if(request()->segment('2') =='create-participant' || request()->segment('2') =='transfer_participant' || request()->segment('2') =='participants' || request()->segment('2') =='event-wise-participants'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Participants</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='participants'){ echo 'active' ;} ?>"><a href="{{url('admin/participants')}}"><i class="fa fa-circle-o"></i> All Participants</a></li>
                        <li class=" <?php if(request()->segment('2') =='create-participant'){ echo 'active' ;} ?>"><a href="{{url('admin/create-participant')}}"><i class="fa fa-circle-o"></i> Add Participants</a></li>
                        <li class=" <?php if(request()->segment('2') =='event-wise-participants' || request()->segment('2') =='transfer_participant'){ echo 'active' ;} ?>"><a href="{{url('admin/event-wise-participants')}}"><i class="fa fa-circle-o"></i> Event Wise Participants</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='voters' || request()->segment('2') =='create-voter'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Voter</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='voters'){ echo 'active' ;} ?>"><a href="{{url('admin/voters')}}"><i class="fa fa-circle-o"></i> Voters List</a></li>
                        <li class=" <?php if(request()->segment('2') =='create-voter'){ echo 'active' ;} ?>"><a href="{{url('admin/create-voter')}}"><i class="fa fa-circle-o"></i> Add New Voter</a></li>
                        {{--<li><a href="#"><i class="fa fa-circle-o"></i> Add Voter</a></li>--}}
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='balance' || request()->segment('2') =='request-balance'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Balance Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='balance'){ echo 'active' ;} ?>"><a href="{{url('admin/balance')}}"><i class="fa fa-circle-o"></i> Balance</a></li>
                        <li class=" <?php if(request()->segment('2') =='request-balance'){ echo 'active' ;} ?>"><a href="{{url('admin/request-balance')}}"><i class="fa fa-circle-o"></i> Balance Request</a></li>
                        {{--<li><a href="#"><i class="fa fa-circle-o"></i> Add Voter</a></li>--}}
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


@endsection