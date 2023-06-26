<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        .background {
            background: url(/final_project/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="background">
    <header>
        <div class="container-fluid bg-white">
            <nav class="navbar bg-white">
                <div class="row">
                    <div class="col-8 d-flex align-items-center">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="/final_project/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png"
                                    class="img-fluid w-25 p-1" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <nav class="nav flex-md-row d-flex align-items-center">
                            <i class="bi bi-clock-history mx-2"></i>
                            <p class="text-center pt-2">|</p>
                            <img src="/final_project/Pemesanan_Tiket_Bus/icons8-male-user-96.png"
                                class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                            <?php if (!empty($userData)): ?>
                                <a class="nav-link text-dark" href="#">
                                    <?php echo $userData->nama; ?>
                                </a>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="mt-4 flex-md-row d-flex align-items-center" style="height: 580px;">
        <div class="col ">
            <div class="container bg-dark text-light p-5 bg-opacity-75 ">
                <?php echo form_open('Home/filter') ?>
                <div class="row">
                    <div class="col">
                        <label class="form-group" for="asalKota">Dari</label>
                        <select class="form-control" name="asalKota">
                            <option value="Bandung">Bandung</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Solo">Solo</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Malang">Malang</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </div>
                    <div class="col-md-1 d-flex align-items-center">
                        <i class="bi bi-arrow-left-right mt-3 px-4"></i>
                    </div>
                    <div class="col">
                        <label class="form-group" for="kotaTujuan">Tujuan</label>
                        <select class="form-control" name="kotaTujuan">
                            <option value="Bandung">Bandung</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Solo">Solo</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Malang">Malang</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-group" for="tglBerangkat">Tanggal Berangkat</label>
                        <input type="date" name="tglBerangkat" id="tglBerangkat" class="form-control">
                    </div>
                    <div class="col">
                        <label class="form-group" for="tglPulang">Tanggal Pulang</label>
                        <input type="date" name="tglPulang" id="tglPulang" class="form-control">
                    </div>
                    <div class="col">
                        <label for="jmlPenumpang">Jumlah Penumpang</label>
                        <input type="text" class="form-control" id="jmlPenumpang" placeholder="Jumlah Penumpang..."
                            required>
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-info mt-4 px-5">Cari</button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </section>
</body>

</html>