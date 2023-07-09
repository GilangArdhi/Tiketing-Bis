<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <!-- < ?php foreach($kursiTerpesan as $kursi): ?> -->
    <header>
        <nav class="mt-5 pt-3 mx-5 px-5 navbar navbar-white">
            <div>
                <h4>Tiket Elektronik</h4>
                <p class="fw-semibold">Kode Pemesanan</p>
                <p class="bg-black text-white px-3 py-1 rounded-5 text-center">
                    <?php echo $dataOrder['id_order'] ?>
                </p>
            </div>
            <!-- <ul class="navbar-nav float-end text-end d-flex justify-content-end">
                    <img src="< ?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png" alt="Travelin Logo" width="250" height="57"  class="ml-3">
                </ul> -->
        </nav>
        <div class="bg-dark-subtle mt-3 mx-5">
            <div class="row pt-2 px-5 fw-medium">
                <div class="col-6 text-black">
                    <p>Tanggal Keberangkatan :
                        <?php echo $dataOrder['tglBerangkat'] ?>
                    </p>
                </div>
                <div class="col-6">
                    <?php foreach ($kursiTerpesan as $kursi): ?>
                        <p class="text-end">
                            <?php echo $kursi->asal ?>
                            <?php echo $kursi->tujuan ?> /
                            <?php echo $kursi->kelas ?>
                        </p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <section class="container">

        <div class="row mt-5 pt-2">
            <?php foreach ($kursiTerpesan as $kursi): ?>
                <div class="col text-start">
                    <h3>
                        <?php echo $kursi->jamBerangkat ?>
                    </h3>
                    <h5>
                        <?php echo $kursi->asal ?>
                    </h5>
                    <p class="mt-3">
                        <?php echo $kursi->terminalAwal ?>
                    </p>
                </div>
                <div class="col-5 text-center">
                    <h3>
                        <?php echo $kursi->durasi ?>J (estimasi)
                    </h3>
                    <hr>
                </div>
                <div class="col text-end">
                    <h3>
                        <?php echo $kursi->jamDatang ?>
                    </h3>
                    <h5>
                        <?php echo $kursi->tujuan ?>
                    </h5>
                    <p class="mt-3">
                        <!-- < ?php echo $kursi->terminalTujuan ?> -->
                    </p>
                </div>
            <?php endforeach ?>
        </div>
        <p class="text-center my-4 pb-2">Waktu yang ditunjukkan adalah perkiraan, mengingat kondisi lalu lintas, cuaca,
            penyeberangan, dsb.</p>
        <hr>
        <p class="mt-2 mb-4">Detail penumpang</p>

        <table class="table mb-5 pb-5">
            <tbody>
                <?php if (!empty($userData)): ?>
                    <tr>
                        <td>Nama Penumpang</td>
                        <td>: 
                            <?php echo $userData->nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: 
                            <?php echo $userData->jenis_kelamin; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>: 
                            <?php echo $userData->umur; ?>
                        </td>
                    </tr>
                    <tr>
                    <?php foreach ($kursiTerpesan as $kursi): ?>
                        <td>Nomor Kursi</td>
                        <td>: <?php echo $kursi->kursiDipesan ?></td>
                    <?php endforeach ?>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
    <footer class="">
        <div class="container py-5">
            <div class="row pb-3">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="m-0">Travelin@gmail.com</p>
                        <p class="m-0">+62 822 1234 5678 (Costumer Service)</p>
                        <p class="m-0">Jl. Amikom Saja No.26 Yogyakarta</p>
                        <p class="m-0">www.travelin.co.id</p>
                    </div>
                    <div class="col-lg-5">

                    </div>
                    <div class="col-lg-3">
                        <p>Travelin adalah sistem reservasi tiket online yang dimiliki dan dikelola oleh PT.Travelin
                            Technology</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12 text-center text-dark fw-semibold">
                &copy; 2023 Travelin Technology
            </div>
        </div>
    </footer>
    <!-- < ?php endforeach; ?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>