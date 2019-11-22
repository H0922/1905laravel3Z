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
   <script src="/static/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
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
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">1111</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">2222</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">3333</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">4444</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="icon-material.html" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">5555</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="starter-kit.html" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">6666</span>
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