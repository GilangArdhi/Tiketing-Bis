<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background {
            background: url(<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>

</head>

<body class="background">
    <section class="d-flex justify-content-center">
        <!-- <form action="../proses.php?action=resetpassw" method="post"> -->
        <!-- <input type="hidden" name="id" value="< ?= $_GET['id'] ?>"> -->
        <div class="container bg-dark text-light p-4 bg-opacity-75 mt-5" style="width: 500px;">
            <div class="form-group pt-0 mt-3">
                <h2 class="text-center mb-5">Setel Ulang Kata Sandi</h2>
            </div>
            <?php echo form_open('Home/resetp')?>
            <div class="form-group p-3 mx-3">
                <label for="inputPass">Kata Sandi Baru</label>
                <input type="password" class="form-control"  name="password"
                    placeholder="Masukkan Kata Sandi Baru...">
            </div>
            <div class="form-group p-3 mx-3">
                <label for="inputPass">Ketik Ulang Kata Sandi</label>
                <input type="password" class="form-control"  name="password_confirmation"
                    placeholder="Masukkan Ulang Kata Sandi Baru...">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-5 px-4">Atur Ulang Kata Sandi</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- </form> -->
    </section>
</body>

</html>