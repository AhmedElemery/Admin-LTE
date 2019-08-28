<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ahmed</b>El_3mary</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      @if (direction() == 'ltr')
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      @endif

      {{--  include menu file here  --}}

      @include('admin.layout.menu')

      {{--  end of menu file  --}}
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('/design/adminPanel/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ aurl() }}">
            <i class="fa fa-dashboard"></i> <span>{{ trans('admin.main') }}</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>{{ trans('admin.admin')  }}<strong>{{ trans('admin.control') }}</strong></span>
            @if (direction() == 'ltr')
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              @else
              <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
            @endif
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ aurl('admin') }}"><i class="fa fa-user-o"></i>{{ trans('admin.admin_account') }}</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
