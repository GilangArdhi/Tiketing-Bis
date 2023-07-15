<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Verifikasi</title>
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
    <div class="d-flex align-items-center justify-content-center">
        <div class="container bg-dark text-light p-4 bg-opacity-75 mt-5" style="width: 500px;">
            <h1 class="text-center mb-5">Kode Verifikasi</h1>
            <?php echo form_open('Home/validasiKodeOTP')?>
            <div class="row justify-content-center p-4 ">
                <div class="col-md-6">
                    <!-- <form action="../proses.php?action=kodeverifikasi" method="post"> -->
                        <!-- <input type="hidden" name="id" value="< ?= $_GET['id'] ?>"> -->
                        <div class="form-group">
                            <label for="otpInput">Masukkan Kode OTP:</label>
                            <input type="text" class="form-control" id="otpInput" name="kode_verifikasi"
                                placeholder="Masukkan kode OTP..." maxlength="6" required>
                        </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class=" btn btn-primary px-4">Verifikasi</button>
            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>

            <div class="d-flex justify-content-center mt-3">
                <?php echo form_open('Home/masukkanEmail2')?>
                <label><button class="btn text-decoration-none text-white">Kirim ulang kode</button></label>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>