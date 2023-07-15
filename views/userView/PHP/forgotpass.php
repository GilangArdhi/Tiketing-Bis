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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background {
            background: url(<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
        }
    </style>

</head>

<body class="background">
    <section class="d-flex justify-content-center">
        <div class="container bg-dark text-light p-5 bg-opacity-75 mt-5" style="width: 500px;">
            <div class="form-group pt-0 mt-2">
                <h1 class="text-center mb-5">Lupa Kata Sandi</h1>
                <h7 class="text-center mb-5">Silahkan kirimkan alamat email Anda. Kami akan mengirimkan kode OTP untuk
                    mengirim ulang Kata Sandi Anda.</h7>
                </div>
                
                <!-- <form action="../proses.php?action=forgotpass" method="post"> -->
                <?php echo form_open('Home/masukkanEmail') ?>
                <div class="form-group pt-4 px-3 mx-3">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email"
                        placeholder="Masukkan Email..." required>
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