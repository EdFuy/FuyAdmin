@extends('admin.layouts.app')
<body>
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Dashboard</a></li>
            <li class="active">Dashboard v2</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->

    </div>
    <!-- end #content -->
    @endsection


    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/crossbrowserjs/html5shiv.js"></script>
    <script src="/crossbrowserjs/respond.min.js"></script>
    <script src="/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="/plugins/morris/raphael.min.js"></script>
    <script src="/plugins/morris/morris.js"></script>
    <script src="/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="/js/color_admin/dashboard-v2.min.js"></script>
    <script src="/js/color_admin/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
        });
    </script>
</body>
</html>
