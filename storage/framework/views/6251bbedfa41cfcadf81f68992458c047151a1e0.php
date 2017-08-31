<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/favicon.png">
    <title>Admin - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- animation CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo e(url('public/ampleadmin')); ?>/css/colors/blue-dark.css" id="theme" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/tinymce/skins/lightgray/skin.min.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" >
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span>
                </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->

            <ul class="nav navbar-top-links navbar-right pull-right">

                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="<?php echo e(url('public/ampleadmin')); ?>/plugins/images/users/varun.jpg" alt="user" /></div>
                                <div class="u-text">
                                    <h4>Admin</h4>

                                </div>
                            </div>
                        </li>

                        <li><a href="<?php echo e(url('admin/logout')); ?>"><i class="fa fa-power-off"></i> Đăng Xuất</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
            <ul class="nav" id="side-menu">

                <li>
                    <a href="<?php echo e(url('admin/home')); ?>" class="waves-effect">
                        <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                        <span class="hide-menu"> Trang Chủ <span class="fa arrow"></span> </span>
                    </a>

                </li>
                <li>
                    <a href="<?php echo e(url('admin/posts')); ?>" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Bài Đăng<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">2</span> </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(url('admin/posts')); ?>">
                                <i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i>
                                <span class="hide-menu">Danh Sách</span>
                            </a>
                        </li>
                        <li><a href="<?php echo e(url('admin/post/addForm')); ?>">
                                <i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i>
                                <span class="hide-menu">Thêm</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="<?php echo e(url('admin/images')); ?>" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Ảnh<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">2</span> </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(url('admin/images')); ?>">
                                <i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i>
                                <span class="hide-menu">Danh Sách</span>
                            </a>
                        </li>
                        <li><a href="<?php echo e(url('admin/image/uploadForm')); ?>">
                                <i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i>
                                <span class="hide-menu">Upload Ảnh</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><?php $__env->startSection('page-title'); ?> Trang Chủ <?php echo $__env->yieldSection(); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">


                    <ol class="breadcrumb">
                        <li><a href="#">Admin</a></li>
                        <li class="active"><?php $__env->startSection('breadcrumb'); ?> Trang Chủ <?php echo $__env->yieldSection(); ?></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/js/waves.js"></script>
<!--Counter js -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/raphael/raphael-min.js"></script>
<!-- chartist chart -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Calendar JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/moment/moment.js"></script>
<script src='<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/calendar/dist/cal-init.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/js/custom.min.js"></script>
<!-- Custom tab JavaScript -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/js/cbpFWTabs.js"></script>
<script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
</script>
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/tinymce/tinymce.min.js"></script>

<!-- jQuery file upload -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
    });
    </script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<!--Style Switcher -->
<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
