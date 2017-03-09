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
        <div class="col-lg-6">
            <div class="ibox animated fadeInRightBig">
                <div class="ibox-title">
                    <h5>菜单列表</h5>
                </div>
                <div class="ibox-content">
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <li class="dd-item dd3-item" data-id="1">
                                <div class="dd-handle dd3-handle">
                                    <i class="fa fa-plus-square-o fa-lg" style="color:#23c6c8;margin:8px"></i>
                                </div>
                                <div class="dd3-content"><span class="label label-info"><i class="fa fa-dashboard"></i></span> 控制台 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/1" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/1/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="1" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/1" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                            </li>		<li class="dd-item dd3-item" data-id="2">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">
                                    <span class="label label-info"><i class="fa fa-cog"></i></span> 系统管理 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/2" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/2/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="2" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/2" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div>
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item dd3-item" data-id="3">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content"><span class="label label-warning"><i class="fa fa-users"></i></span> 用户管理 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/3" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/3/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="3" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/3" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="4">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content"><span class="label label-warning"><i class="fa fa-male"></i></span> 角色管理 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/4" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/4/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="4" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/4" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="5">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content"><span class="label label-warning"><i class="fa fa-paper-plane"></i></span> 权限管理 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/5" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/5/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="5" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/5" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="6">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content"><span class="label label-warning"><i class="fa fa-navicon"></i></span> 菜单管理 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/6" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/6/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="6" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/6" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="7">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content"><span class="label label-warning"><i class="fa fa-file-text-o"></i></span> 系统日志 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.idashboard.test/admin/menu/7" data-toggle="tooltip" data-original-title="查看"  data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.idashboard.test/admin/menu/7/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip"data-original-title="修改"  data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="7" data-original-title="删除"data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="http://www.idashboard.test/admin/menu/7" method="POST" style="display:none"><input type="hidden"name="_method" value="delete"><input type="hidden" name="_token" value="8SEJUsW1o0W2tSJ3R2R71XBxK3BwBFRUCRMQXo5v"></form></a></div></div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



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
    {{--菜单css-2017-03-08--}}
    <link href="/css/style_idashboard.css" rel="stylesheet" />
    <link href="/css/nestable_idashboard.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL JS ================== -->
    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
        });
    </script>
</body>
</html>
