<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="/static/admin/assets/images/favicon.png">
   <title>@yield('title')</title>
   <!-- Custom CSS -->
   <link href="/static/admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="/static/admin/dist/css/style.min.css" rel="stylesheet">
   <script src="/static/admin/assets/libs/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap tether Core JavaScript -->
   <script src="/static/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
   {{-- <script src="/static/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script> --}}
   <!-- slimscrollbar scrollbar JavaScript -->
   <script src="/static/admin/assets/extra-libs/sparkline/sparkline.js"></script>
   <!--Wave Effects -->
   <script src="/static/admin/dist/js/waves.js"></script>
   <!--Menu sidebar -->
   <script src="/static/admin/dist/js/sidebarmenu.js"></script>
   <!--Custom JavaScript -->
   <script src="/static/admin/dist/js/custom.min.js"></script>
   <!--This page JavaScript -->
   <!--chartis chart-->
   <script src="/static/admin/assets/libs/chartist/dist/chartist.min.js"></script>
   <script src="/static/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
   <script src="/static/admin/dist/js/pages/dashboards/dashboard1.js"></script>
   <script src="/static/admin/css/bootstrap.css"></script>
   <script src="/static/admin/js/bootstrap.min.js"></script>  
    <script src="/static/admin/js/jquery.min.js"></script>

</head>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="/static/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="/static/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="/static/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="/static/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse " id="navbarSupportedContent" data-navbarbg="skin6">
                    @if (session('login'))
                    <div class="m-icon pull-right">
                            <h3><i class="m-r-10 mdi mdi-account-circle">
                                 </i>
                                <code class="m-r-10">欢迎{{session('login')}}登录</code></h3> 
                             </div>
                    @else
                    <div class="m-icon pull-right">
                            <h3><i class="m-r-10 mdi mdi-account-circle">
                                 </i>
                                 <a href="{{url('login/index')}}"><code class="m-r-10">登录</code></a></h3> 
                             </div>
                    @endif
                       
                            <div class="m-icon pull-right">
                                <h3><i class="m-r-10 mdi mdi-account-multiple-plus">
                                    </i><a href="{{url('login/create')}}"><code class="m-r-10">欢迎注册</code></a></h3>
                                 
                                </div>
                 
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">2</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/customer/add') }}" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
<<<<<<< HEAD
                                <span class="hide-menu">3</span>
=======
                                <span class="hide-menu">客户管理</span>
>>>>>>> wang
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('care/index')}}" aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">4</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="icon-material.html" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">5</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="starter-kit.html" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">6</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
      
        <div class="page-wrapper">
                @yield('content')
        </div>
    
    </div>
</body>

</html>