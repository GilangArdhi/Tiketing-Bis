<?php
//Menyisipkan koneksi
include_once './koneksi.php';

//Menangkap data yang dikirim ke dalam variabel
$kdJadwal = $_GET['kdJadwal'];

//Membuat query sql
$query = "SELECT * FROM jadwal_bus WHERE kd_jadwal= '$kdJadwal' LIMIT 1";

//Menjalankan query
$exec = mysqli_query($koneksi, $query);

if (!$row = mysqli_fetch_assoc($exec)) {
    //ketika tidak ditemukan
    return header('location: jadwal_admin.php');
}
?>

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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="logo-no-background.png" alt="Travelin" width="180" height="30">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-light p-3">
            <!-- Left navbar links -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <a class="text-white text-center " data-toggle="dropdown" href="#">
                    Admin <img src="profile.jpg" alt="" class="ml-2" width="27px">
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
            <a href="dashboard_admin.html" class="brand-link">
                <img src="logo-no-background.png" alt="Travelin Logo" width="180" height="30">
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
                            <h1 class="m-0">Edit Jadwal Bus</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- modal -->
                    <!-- Modal-Edit -->
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="modal-body">
                                <h1 class="mb-3">Edit Jadwal Bus</h1>
                                <?php foreach($travelin as $trv): ?>
                                <form action="<?php echo base_url() ?>Terminal" method="post">
                                    <input type="hidden" name="kdJadwal" value="<?php echo $trv->kd_jadwal; ?>">
                                    <div class="mb-3">
                                        <label for="kdBis" class="form-label">Kode Bus</label>
                                        <input type="number" class="form-control" name="kdBis" id="kdBis"
                                            value="<?php echo $trv->kd_bis; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="asal" class="form-label">Kota Asal</label>
                                        <input type="text" class="form-control" name="kotaAsal" id="kotaAsal"
                                            value="<?php echo $trv->asal; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tujuan" class="form-label">Kota Tujuan</label>
                                        <input type="text" class="form-control" name="kotaTujuan" id="kotaTujuan"
                                            value="<?php echo $trv->tujuan; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" name="kelas" id="kelas"
                                            value="<?php echo $trv->kelas; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">harga</label>
                                        <input type="number" class="form-control" name="harga" id="harga"
                                            value="<?php echo $trv->harga; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jamBerangkat" class="form-label">Jam Berangkat</label>
                                        <input type="time" class="form-control" name="jamBerangkat" id="jamBerangkat"
                                            value="<?php echo $trv->jamBerangkat; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jamDatang" class="form-label">Jam Datang</label>
                                        <input type="time" class="form-control" name="jamDatang" id="jamDatang"
                                            value="<?php echo $trv->jamDatang; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="terminalAwal" class="form-label">Terminal Awal</label>
                                        <input type="text" class="form-control" name="terminalAwal" id="terminalAwal"
                                            value="<?php echo $trv->terminalAwal; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="terminalTujuan" class="form-label">Terminal Tujuan</label>
                                        <input type="text" class="form-control" name="terminalTujuan" id="terminalTujuan"
                                            value="<?php echo $trv->terminalTujuan; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary float-end mx-3">Edit</button>
                                        <a href="<?php echo base_url() ?>Jadwal" class="btn btn-danger float-end mx-3">Cancel</a>
                                    </div>
                                </form>
                                <?php endforeach; ?>
                            </div>
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
</body>

</html>