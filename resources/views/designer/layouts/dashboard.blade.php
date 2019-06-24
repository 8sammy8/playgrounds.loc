
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>PD</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Playgrounds</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->

                        <a class="fa fa-btn fa-sign-out" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('storage/img/users/default.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Playgrounds designer</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">DASHBOARD</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="{{ route('designer.design.request.index') }}"><i class="fa fa-link"></i> <span>Requests</span></a></li>


                <li class="treeview">
                    <a href="#"><i class="fa fa-gear"></i> <span>Options</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-envelope"></i>Notification Email</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-user"></i> <span>Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-key"></i>Permission</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>@isset($pageHeader) {{ $pageHeader ? $pageHeader : 'Page '}} @endisset
                <small>@isset($pageHeaderSmall) {{ $pageHeaderSmall ? $pageHeaderSmall : ''}} @endisset</small>
            </h1>

{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
{{--                <li class="active">Here</li>--}}
{{--            </ol>--}}
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |

              -------------------------->
            <div class="row col-12">
                @include(config('settings.folder_designer') . '.layouts.flash')

                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2019 <a href="#">Playgrounds</a>.</strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->