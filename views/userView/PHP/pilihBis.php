<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilihBis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script type = 'text/javascript' src = "< ?php echo base_url();?>js/pilihBis.js"></script> -->
    <!-- <script src="jquery-3.6.4.min.js"></script> -->

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
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>profil"><i
                                                    class="bi bi-person"></i> Profil</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>riwayatPembelian"><i
                                                    class="bi bi-clock-history"></i> Riwayat</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>faq"><i
                                                    class="bi bi-info-circle"></i> FAQ</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>hubungikami"><i
                                                    class="bi bi-chat-left-text"></i> Hubungi Admin</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>tentangKami"><i
                                                    class="bi bi-gear"></i> Tentang Kami</a></li>
                                    </ul>
                                <?php else: ?>
                                    <a href="<?php echo base_url() ?>Login" class="btn btn-success nav-link text-white">Login</a>
                                    <a href="<?php echo base_url() ?>daftar" class="btn btn-primary nav-link text-white mx-2">Daftar</a>
                                <?php endif; ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary ">
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
                        <div class="row px-4">
                            <label for="tglBerangkat" class="text-white">
                                <?php echo $objFilter['tglBerangkat'] ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div>
                        <a class="btn btn-primary d-flex align-items-center my-3 mx-4"
                            href="<?php echo base_url() ?>halamanUtama">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <table class="table" id="anu">
            <thead>
                <tr class="text-center">
                    <th class="col-2"></th>
                    <th class="col-2">Keberangkatan</th>
                    <th class="col-2">Durasi</th>
                    <th class="col-2">Kedatangan</th>
                    <th class="col-2">Jenis Bus</th>
                    <th class="col-2">Harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- < ?php if (!empty($jadwal_bis)): ?> -->
                <?php echo form_open('Home/dataPilihBis') ?>
                <?php foreach ($jadwal_bis as $index => $jadwal): ?>
                    <tr class="text-center tr-data-row">
                        <td class="logoBis">
                            <?php
                            // Mengambil data BLOB dari database
                            $blobData = $jadwal->logo;

                            // Mengatur tipe konten header
                            // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                        
                            // Konversi data BLOB menjadi URL gambar
                            $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                            ?>
                            <!-- Menampilkan gambar -->
                            <img src="<?php echo $imageURL; ?>" class="img-fluid w-50" alt="Logo">
                            <!-- < ?php echo $jadwal->logo ?> -->
                            <!-- < ?php echo $blobData ?> -->
                        </td>
                        <td>
                            <div class="jamBerangkat">
                                <?php echo $jadwal->jamBerangkat ?>
                            </div>
                            <div class="text-secondary terminalAwal">
                                <?php echo $jadwal->terminalAwal ?>
                            </div>
                        </td>
                        <td class="text-secondary durasi">
                            <?php echo $jadwal->durasi ?> j
                        </td>
                        <td>
                            <div class="jamDatang">
                                <?php echo $jadwal->jamDatang ?>
                            </div>
                            <div class="text-secondary terminalTujuan">
                                <?php echo $jadwal->terminalTujuan ?>
                            </div>
                        </td>
                        <td class="kelas">
                            <?php echo $jadwal->kelas ?>
                        </td>
                        <td>
                            <div class="hargaTiket">
                                <?php echo $jadwal->harga ?>
                            </div>
                            <div class="text-center">
                                <?php if (!empty($userData)): ?>
                                    <button class="btn btn-primary" name="id" id="id"
                                        value="<?php echo $jadwal->kd_jadwal ?>">Tampilkan
                                        Kursi</button>
                                <?php else: ?>
                                    <a href="<?php echo base_url() ?>Login" class="btn btn-primary" name="id" id="id">Tampilkan
                                        Kursi</a>
                                <?php endif; ?>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
                <?php echo form_close() ?>
                <!-- <\?php endif; ?> -->
            </tbody>
        </table>
    </section>

</body>

</html>