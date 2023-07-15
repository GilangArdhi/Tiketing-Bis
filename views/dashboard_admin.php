<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url() ?>assets/logo-no-background.png" alt="Travelin"
                width="150" height="30">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-light p-3">
            <!-- Left navbar links -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <a class="text-white text-center " data-toggle="dropdown" href="#">
                    Admin <img src="<?php echo base_url() ?>assets/profile.jpg" alt="" class="rounded-circle ml-2" width="27px">
                    <!-- <i class="fas fa-user-circle pl-3"></i> -->
                </a>
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard_admin.php" class="brand-link">
                <img src="<?php echo base_url() ?>assets/logo-no-background.png" alt="Travelin" width="180" height="30">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Admin" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>User" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Order" class="nav-link">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Bus" class="nav-link">
                                <i class="nav-icon fas fa-bus"></i>
                                <p>Bus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Jadwal" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>Jadwal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Terminal" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Terminal</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Selamat Datang di Dashboard Admin</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- Main content -->

        <!-- /.content -->

        <!-- /.content-wrapper -->

        <!-- /.control-sidebar -->
    </div>
    <!-- /.wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
</body>

</html>