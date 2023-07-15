<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terminal | Admin</title>

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
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                    Admin <img src="<?php echo base_url() ?>assets/profile.jpg" alt="" class="rounded-circle ml-2"
                        width="27px">
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
            <a href="<?php echo base_url() ?>dashboard_admin.php" class="brand-link">
                <img src="<?php echo base_url() ?>assets/logo-no-background.png" alt="Travelin Logo" width="180"
                    height="30">
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
                            <a href="<?php echo base_url() ?>Admin" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>User" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Order" class="nav-link">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>
                                    Order
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Bus" class="nav-link">
                                <i class="nav-icon fas fa-bus"></i>
                                <p>
                                    Bus
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Jadwal" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Jadwal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Terminal" class="nav-link active">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Terminal
                                </p>
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
                            <h1 class="m-0">Terminal</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- modal -->
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Tambah Terminal
                    </button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Tambah Terminal</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url() . 'Terminal/tambahTerminal' ?>">
                                        <div class="form-group">
                                            <label for="idterminal" class="form-label">Id Terminal</label>
                                            <input type="number" class="form-control" id="" placeholder="1"
                                                name="idTerminal">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="form-label">Nama Terminal</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="alamat">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id Terminal</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        // membuat perintah query
                                        // $query = "SELECT id_user,email,nama,pass,jenis_kelamin,noHP,umur FROM users";
                                        
                                        // menjalankan query dan menampungnya di variasi
                                        // $rows = mysqli_query($koneksi, $query);
                                        
                                        
                                        // melakukan perulangan sebanyak baris yang diambil dari hasil query
                                        ?>
                                        <?php foreach ($travelin as $trv): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $trv['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv['nama_tml']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv['alamat_tml']; ?>
                                                </td>
                                                <td width="150">
                                                    <div class="btn-group d-flex justify-content-around gap-4">
                                                        <div class="btn-group d-flex justify-content-around gap-4">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" name="btnSubmit" value="<?= $trv['id']?>" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-<?= $trv['id']?>">
                                                                Edit
                                                            </button>

                                                            <!-- The Modal -->
                                                            <div class="modal fade" id="editModal-<?= $trv['id']?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Form Edit Terminal
                                                                            </h4>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <?php echo form_open('Terminal/editTerminal') ?>
                                                                            <div class="form-group">
                                                                                <label for="id" class="form-label">Id
                                                                                    Terminal</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="id" value="<?php echo $trv['id']?>"
                                                                                    name="id" readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="nama" class="form-label">Nama
                                                                                    Terminal</label>
                                                                                <input type="text" class="form-control"
                                                                                    id=""
                                                                                    value="<?php echo $trv['nama_tml']?>"
                                                                                    name="nama">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="alamat"
                                                                                    class="form-label">alamat</label>
                                                                                <input type="text" class="form-control"
                                                                                    id=""
                                                                                    value="<?php echo $trv['alamat_tml']?>"
                                                                                    name="alamat">
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary"
                                                                                name="btnKd"
                                                                                value="<?= $trv['id']?>">Submit</button>
                                                                            <?php echo form_close(); ?>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                        <?php echo form_open('Terminal/delTerminal') ?>
                                                        <button type="submit" value="<?= $trv['id']?>"
                                                            class="btn btn-danger btn-sm" name='idTerminal'
                                                            onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</button>
                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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
    <script
        src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
</body>

</html>