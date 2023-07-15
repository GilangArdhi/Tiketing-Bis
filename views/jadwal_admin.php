<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Bus | Admin</title>

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
                width="180" height="30">
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
                            <a href="<?php echo base_url() ?>Jadwal" class="nav-link active">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Jadwal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Terminal" class="nav-link">
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
                            <h1 class="m-0">Jadwal Bus</h1>
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
                        Tambah Jadwal Bus
                    </button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Tambah Jadwal Bus</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url() . 'Jadwal/tambahJadwal' ?>">
                                        <div class="form-group">
                                            <label for="kdjadwal" class="form-label">Kode Jadwal</label>
                                            <input type="text" class="form-control" id="" placeholder="J0001"
                                                name="kdJadwal">
                                        </div>
                                        <div class="form-group">
                                            <label for="kdbis" class="form-label">Kode Bus</label>
                                            <input type="number" class="form-control" id="" placeholder="1"
                                                name="kdBis">
                                        </div>
                                        <div class="form-group">
                                            <label for="asal" class="form-label">Asal</label>
                                            <input type="text" class="form-control" id="" placeholder="Solo"
                                                name="asal">
                                        </div>
                                        <div class="form-group">
                                            <label for="tujuan" class="form-label">Tujuan</label>
                                            <input type="text" class="form-control" id="" placeholder="Jakarta"
                                                name="tujuan">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="" placeholder="200500"
                                                name="harga">
                                        </div>
                                        <div class="form-group">
                                            <label for="jamberangkat" class="form-label">Jam Berangkat</label>
                                            <input type="time" class="form-control" id="" placeholder="08.00"
                                                name="jamBerangkat">
                                        </div>
                                        <div class="form-group">
                                            <label for="jamdatang" class="form-label">Jam Datang</label>
                                            <input type="time" class="form-control" id="" placeholder="10.00"
                                                name="jamDatang">
                                        </div>
                                        <div class="form-group">
                                            <label for="terminalasal" class="form-label">Terminal Asal</label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="Terminal Giwangan" name="terminalAsal">
                                        </div>
                                        <div class="form-group">
                                            <label for="terminaltujuan" class="form-label">Terminal Tujuan</label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="Terminal Pasar Rebo" name="terminalTujuan">
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
                                            <th>Kode Jadwal</th>
                                            <th>Kode Bus</th>
                                            <th>Asal</th>
                                            <th>Tujuan</th>
                                            <th>Kelas</th>
                                            <th>Harga</th>
                                            <th>Jam Keberangkatan</th>
                                            <th>Jam Kedatangan</th>
                                            <th>Terminal Asal</th>
                                            <th>Terminal Tujuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // membuat perintah query
                                        // $query = "SELECT kd_jadwal,kd_bis,asal,tujuan,kelas,harga,jamBerangkat,jamDatang,terminalAwal,terminalTujuan FROM jadwal_bus";
                                        
                                        // menjalankan query dan menampungnya di variasi
                                        // $rows = mysqli_query($koneksi, $query);
                                        
                                        $i = 1;
                                        // melakukan perulangan sebanyak baris yang diambil dari hasil query
                                        ?>
                                        <?php foreach ($travelin as $trv): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $trv->kd_jadwal; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->kd_bis; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->asal; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->tujuan; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->kelas; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->harga; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->jamBerangkat; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->jamDatang; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->terminalAwal; ?>
                                                </td>
                                                <td>
                                                    <?php echo $trv->terminalTujuan; ?>
                                                </td>
                                                <td width="150">
                                                    <div class="btn-group d-flex justify-content-around gap-4">
                                                        <div class="btn-group d-flex justify-content-around gap-4">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" name="btnSubmit" value="<?= $trv->kd_jadwal?>" class="btn btn-secondary btn-sm"
                                                                data-bs-toggle="modal" data-bs-target="#editModal-<?= $trv->kd_jadwal ?>">
                                                                Edit
                                                            </button>

                                                            <!-- The Modal -->
                                                            <div class="modal fade" id="editModal-<?= $trv->kd_jadwal ?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Form Edit Jadwal Bus
                                                                            </h4>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                        <?php echo form_open('Jadwal/editJadwal')?>
                                                                            <div class="form-group">
                                                                                <label for="kdjadwal"
                                                                                        class="form-label">Kode
                                                                                        Jadwal</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="kdJadwal" value="<?php echo $trv->kd_jadwal?>"
                                                                                        name="kdJadwal" readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="kdbis"
                                                                                        class="form-label">Kode Bus</label>
                                                                                    <input type="number"
                                                                                        class="form-control" id=""
                                                                                        value="<?php echo $trv->kd_bis?>" name="kdBis">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="asal"
                                                                                        class="form-label">Asal</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="" value="<?php echo $trv->asal?>"
                                                                                        name="asal">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="tujuan"
                                                                                        class="form-label">Tujuan</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="" value="<?php echo $trv->tujuan?>"
                                                                                        name="tujuan">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="harga"
                                                                                        class="form-label">Harga</label>
                                                                                    <input type="number"
                                                                                        class="form-control" id=""
                                                                                        value="<?php echo $trv->harga?>" name="harga">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="jamberangkat"
                                                                                        class="form-label">Jam
                                                                                        Berangkat</label>
                                                                                        <input type="time" class="form-control"
                                                                                        id="" value="<?php echo $trv->jamBerangkat?>"
                                                                                        name="jamBerangkat">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="jamdatang"
                                                                                        class="form-label">Jam
                                                                                        Datang</label>
                                                                                        <input type="time" class="form-control"
                                                                                        id="" value="<?php echo $trv->jamDatang?>"
                                                                                        name="jamDatang">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="terminalasal"
                                                                                        class="form-label">Terminal
                                                                                        Asal</label>
                                                                                        <input type="text" class="form-control"
                                                                                        id=""
                                                                                        value="<?php echo $trv->terminalAwal?>"
                                                                                        name="terminalAsal">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="terminaltujuan"
                                                                                        class="form-label">Terminal
                                                                                        Tujuan</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id=""
                                                                                        value="<?php echo $trv->terminalTujuan?>"
                                                                                        name="terminalTujuan">
                                                                                    </div>
                                                                                
                                                                                    <button type="submit"
                                                                                class="btn btn-primary" name="btnKd" value="<?= $trv->kd_jadwal?>">Submit</button>
                                                                                <?php echo form_close();?>
                                                                                <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                        <?php echo form_open('Jadwal/delJadwal') ?>
                                                        <button type="submit" value="<?= $trv->kd_jadwal ?>"
                                                            class="btn btn-danger btn-sm" name="idJadwal"
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
    <script>
    // document.getElementById('kdJadwal').disabled = true;
    </script>
</body>
</html>