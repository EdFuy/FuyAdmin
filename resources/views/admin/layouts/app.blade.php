<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Fuy Admin | Dashboard v2</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/color_admin/animate.min.css" rel="stylesheet" />
    <link href="/css/color_admin/style.min.css" rel="stylesheet" />
    <link href="/css/color_admin/style-responsive.min.css" rel="stylesheet" />
    <link href="/css/color_admin/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="/plugins/morris/morris.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    <style type="text/css">
        /*菜单小圆圈位置*/
        .sidebar .sub-menu>li>a:before{
            margin-top:-8px;
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('admin.partials.header')
    @include('admin.partials.navbar')

    @yield('content')
    @include('admin.partials.theme')
    @include('admin.partials.footer')
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
<!-- Scripts -->

    @yield('scripts')


</body>
</html>
