<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- < ?php session_start() ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <style>
        .background {
            background: url(<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
        }
    </style> -->

</head>

<body>
    <header>
        <div class="container-fluid bg-white">
            <nav class="navbar bg-white">
                <div class="row">
                    <div class="col-8 d-flex align-items-center">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png"
                                    class="img-fluid w-25 p-1" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-4 d-flex justify-content-end">
                        <nav class="nav flex-md-row d-flex align-items-center justify-content-end">
                            <div class="dropdown d-flex align-items-center">
                                < ?php if (!empty($userData)): ?>
                                    <img src="< ?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/icons8-male-user-96.png"
                                        class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                                    <a type="button" class="btn nav-link text-dark dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        < ?php echo $userData->nama; ?>
                                    </a>
                                < ?php endif; ?>
                            </div>
                        </nav>
                    </div> -->
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary">
            <!-- Edit Profil -->
            <div class="col-md-10 d-flex align-content-start py-3">
                <div>
                    <a href="<?php echo base_url() ?>editProfil" class="btn btn-primary bi bi-arrow-left arrow text-white"> </a>
                </div>
                <div class="d-flex align-items-center">
                    <h5 class="text-white text-center ms-3 my-2 mx-auto">Ubah Kata Sandi</h5>
                </div>
            </div>
        </div>
    </header>
    <section class="d-flex justify-content-center">
        <div class="container bg-dark text-light p-5 bg-opacity-75 mt-5" style="width: 500px;">
            <div class="form-group pt-0 mt-2">
                <h1 class="text-center mb-5">Ubah Kata Sandi</h1>
                <h7 class="text-center mb-5">Silahkan kirimkan alamat email Anda. Kami akan mengirimkan kode OTP untuk
                    mengirim ulang Kata Sandi Anda.</h7>
            </div>

            <!-- <form action="../proses.php?action=forgotpass" method="post"> -->
            <?php echo form_open('Home/masukkanEmail') ?>
            <div class="form-group pt-4 px-3 mx-3">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukkan Email..."
                    required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4 px-4">Kirim OTP</button>
            </div>
            <? echo form_close(); ?>
            <!-- </form> -->
        </div>
    </section>

    <!-- < ?php if (isset($_SESSION['gagal'])): ?>
        <script>
            alert('Gagal Mereset Password!');
        </script>
        < ?php
        session_destroy();
    endif;
    ?> -->
</body>

</html>