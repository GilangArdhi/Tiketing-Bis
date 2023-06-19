<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilihBis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
    </style>

</head>
<body>
    <header>
        <div class="container-fluid bg-white">
            <nav class="navbar bg-white">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="/final_project/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png" 
                        class="img-fluid w-25 p-1" alt="logo">
                    </a>
                    <div class="float-end">
                        <nav class="nav flex-md-row d-flex align-items-center">
                            <i class="bi bi-clock-history mx-2"></i>
                            <p class="text-center pt-2">|</p>
                            <img src="/final_project/Pemesanan_Tiket_Bus/icons8-male-user-96.png" class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                            <a class="nav-link text-dark" href="#">User</a>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary ">
            <div class="row">
                <div class="col-md-10 d-flex justify-content-center py-3">
                    <div>
                        <label for="asalKota"></label>
                        <i class="bi bi-arrow-right text-white"></i>
                        <label for="kotaTujuan"></label>
                    </div>
                    <div>
                        <label for="tglBerangkat"></label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div>
                        <a href="#" class="btn btn-primary d-flex align-items-center my-3 mx-4">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th class="col-2"></th>
                    <th class="col-2">Keberangkatan</th>
                    <th class="col-2">Durasi</th>
                    <th class="col-2">Kedatangan</th>
                    <th class="col-2">Jenis Bus</th>
                    <th class="col-2">Harga</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </section>
</body>
</html>