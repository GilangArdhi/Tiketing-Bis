<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
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
                    <div class="col-4 d-flex justify-content-end">
                        <nav class="nav flex-md-row d-flex align-items-center justify-content-end">
                            <div class="dropdown d-flex align-items-center">
                                <?php if (!empty($userData)): ?>
                                    <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/icons8-male-user-96.png"
                                        class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                                    <a type="button" class="btn nav-link text-dark dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <?php echo $userData->nama; ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>profil"><i class="bi bi-person"></i> Profil</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>riwayatPembelian"><i class="bi bi-clock-history"></i> Riwayat</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>faq"><i class="bi bi-info-circle"></i> FAQ</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>hubungikami"><i class="bi bi-chat-left-text"></i> Hubungi Admin</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>tentangKami"><i class="bi bi-gear"></i> Tentang Kami</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary">
            <div class="row">
                <div class="col-md-10 d-flex justify-content-center py-3">
                    <div>
                        <div class="row">
                            <div>
                                <label for="asalKota" class="text-white" name="asalKota">
                                    <b>
                                        <?php echo $objFilter['kotaAsal'] ?>
                                    </b>
                                </label>
                                <i class="bi bi-arrow-right text-white" name="kotaTujuan"></i>
                                <label for="kotaTujuan" class="text-white">
                                    <b>
                                        <?php echo $objFilter['tujuanKota'] ?>
                                    </b>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light">
        <?php echo form_open('Home/pilihMetode')?>
        <div class="row">
            <div class="col-4">
                <div class="mx-md-3 mt-3">
                    <b>Pilih Metode Pembayaran</b>
                </div>
                <div class="container bg-white mx-md-3 my-2 p-1">
                    <table class="table table-bordered">
                            <?php foreach ($tampilBank as $bank): ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check m-0 py-2  d-flex align-items-center ">
                                                <input type="radio" class="form-check-input " style="width: 100px;" id="logo"
                                                    name="optradio" value="<?php echo $bank->id_bank ?>" required>
                                                <label class="form-check-label mx-2" for="logo">
                                                    <?php
                                                    // Mengambil data BLOB dari database
                                                    $blobData = $bank->logo_bank;

                                                    // Mengatur tipe konten header
                                                    // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                                            
                                                    // Konversi data BLOB menjadi URL gambar
                                                    $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                                                    ?>
                                                    <!-- Menampilkan gambar -->
                                                    <img src="<?php echo $imageURL; ?>" class="img-fluid rounded w-25 p-1"
                                                        alt="logo">

                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                <td>
                                    <div class="form-check m-0 py-2  d-flex align-items-center ">
                                        <input type="radio" class="form-check-input" style="width: 120px;" id="gopay"
                                            name="optradio" value="option2">
                                        <label class="form-check-label mx-2" for="gopay">
                                            <img src="< ?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/Gopay.png"
                                                class="img-fluid rounded w-25 p-1" alt="gopay">
                                        </label>
                                    </div>
                                </td>
                            </tr> -->
                                </tbody>
                            <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <div class="container-sm bg-white mt-5 p-2">
                    <?php foreach ($jadwalTerpilih as $index => $jadwal): ?>
                        <div class="border-bottom pt-3">
                            <div class="row">
                                <div class="col-2">
                                    <?php
                                    // Mengambil data BLOB dari database
                                    $blobData = $jadwal->logo;

                                    // Mengatur tipe konten header
                                    // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                                
                                    // Konversi data BLOB menjadi URL gambar
                                    $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                                    ?>
                                    <!-- Menampilkan gambar -->
                                    <img src="<?php echo $imageURL; ?>" class="img-fluid w-100" alt="Logo">
                                </div>
                                <div class="col-2">
                                    <p class="text-primary"><b>
                                            <?php echo $jadwal->nama ?>
                                        </b></p>
                                </div>
                                <div class="col-2">
                                    <p class="text-secondary">
                                        <?php echo $jadwal->kelas ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 border-bottom">
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/iconcalendar.jpg"
                                        class="img-fluid w-50" alt="iconKalender">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <b>Keberangkatan</b>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <?php echo $objFilter['tglBerangkat'] ?>
                                        </div>
                                        <div class="col">

                                            <?php echo $jadwal->jamBerangkat ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="row text-secondary">
                                        Kursi
                                    </div>
                                    <div class="row" name="kursi" id="kursi">
                                        No.Kursi
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row border-bottom">
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/iconlocation.jpg"
                                            class="img rounded-circle  w-50" alt="icon location">
                                    </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <b>Titik Keberangkatan</b>
                                        </div>
                                        <div class="row">
                                            <P>
                                                <?php echo $objFilter['kotaAsal'] ?>
                                            </P>
                                        </div>
                                        <div class="row text-muted">
                                            <p>
                                                <?php echo $jadwal->terminalAwal ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <b>Titik Estimasi</b>
                                        </div>
                                        <div class="row">
                                            <p>
                                                <?php echo $objFilter['tujuanKota'] ?>
                                            </p>
                                        </div>
                                        <div class="row text-muted">
                                            <p>
                                                <?php echo $jadwal->terminalTujuan ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-info mt-2 mb-3">
                            <div class="row">
                                <div class="col-2 align-items-center">
                                    <?php if (!empty($userData->ftProfil)): ?>
                                        <?php
                                        // Mengambil data BLOB dari database
                                        $blobData = $userData->ftProfil;

                                        // Mengatur tipe konten header
                                        // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                                
                                        // Konversi data BLOB menjadi URL gambar
                                        $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                                        ?>
                                        <!-- Menampilkan gambar -->
                                        <img src="<?php echo $imageURL; ?>" class="img-fluid rounded-circle w-25 p-1"
                                            alt="fotoprofil">
                                        <!-- < ?php echo $jadwal->logo ?> -->
                                        <!-- < ?php echo $blobData ?> -->
                                    <?php else: ?>
                                        <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/icons8-male-user-96.png"
                                            class="img-fluid rounded-circle w-50" alt="fotoprofil">
                                    <?php endif; ?>
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <?php if (!empty($userData)): ?>
                                        <p class="text-dark">
                                            <?php echo $userData->nama; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-sm bg-white mt-3 p-3">
                        <h5 class="container-fluid text-bg-primary">Rincian Harga</h5>
                        <div class="row">
                            <div class="col text-muted">
                                Harga selanjutnya
                            </div>
                            <div class="col text-muted d-flex justify-content-end">
                                <?php echo $jadwal->harga ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-dark">
                                <b>Total Harga</b>
                            </div>
                            <div class="col text-dark d-flex justify-content-end">
                                <b>
                                    <?php echo $jadwal->harga * $objFilter['jmlPenumpang'] ?>
                                </b>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="float-end">
                    <button type="submit" class="btn btn-primary px-4 mt-3"><b>Bayar</b></button>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </section>
    <script>
        const selectedSeatsString = localStorage.getItem('selectedSeats');
        const selectedSeats = JSON.parse(selectedSeatsString);
        const kursiElement = document.getElementById('kursi');

        // Menetapkan nilai selectedSeats ke elemen kursi
        kursiElement.textContent = selectedSeats;
    </script>
</body>

</html>