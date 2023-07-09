<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rincian History 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="hold-transition sidebar-mini layout-responsif">
    <!-- Navbar -->
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
                                    alt="logo bis">
                                <!-- < ?php echo $jadwal->logo ?> -->
                                <!-- < ?php echo $blobData ?> -->
                            <?php else: ?>
                                <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/icons8-male-user-96.png"
                                    class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                            <?php endif; ?>
                            <div class="dropdown d-flex align-items-center">
                                <?php if (!empty($userData)): ?>
                                    <a type="button" class="btn nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
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
    </header>
    <!-- /.navbar -->

        <!-- Main content -->
    <section class="content">
        <?php foreach($selectedHistory as $history): ?>
        <div class="bg-primary text-white"> <!-- Profil Saya -->
            <div class="container-fluid py-3 px-5">
                <h4>Kode Pemesanan</h4>
                <h2><?php echo $history->id_order ?></h2>
                <p>Anda wajib menunjukkan boarding pass pada saat pemeriksaan di atas bus</p>
            </div>
        </div>
        <div class="container mt-4">
            <div class="container-fluid">
                <h3><?php echo $history->asal ?> → <?php echo $history->tujuan ?></h3>
                <p><?php echo $history->transaction_time ?></p>
                <div class="card shadow mb-4" >
                    <div class="card-body">
                        <div class="container">
                            <div class="row m-2">
                                <div class="col-6">
                                    <h5>Nama bus</h5>
                                    <h5>Nomor bus</h5>
                                    <h5>Naik dari</h5>
                                    <h5>Turun di</h5>
                                    <h5>Nama Penumpang</h5>
                                    <h5>Usia</h5>
                                    <h5>Kursi</h5>
                                    <h5>Email</h5>
                                    <h5>Mobile</h5>
                                    <h5>Total Harga</h5>
                                    <h5>Bayar Tiket</h5>
                                </div>
                                <div class="col-6 text-secondary">
                                    <h5><?php echo $history->nama ?>(<?php echo $history->kelas ?>)</h5>
                                    <h5><?php echo $history->plat?></h5>
                                    <h5><?php echo $history->terminalAwal ?></h5>
                                    <h5><?php echo $history->terminalTujuan ?></h5>
                                    <h5><?php echo $userData->nama ?></h5>
                                    <h5><?php echo $userData->umur ?></h5>
                                    <h5><?php echo $history->kursiDipesan ?></h5>
                                    <h5><?php echo $userData->email ?></h5>
                                    <h5><?php echo $userData->noHP ?></h5>
                                    <h5><?php echo $history->gross_amount ?></h5>
                                    <a href="<?php echo $history->pdf_url ?>"><b>Print</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <script>
        var maxvalue = <?php echo json_encode($selectedHistory) ?>;
        console.log(maxvalue);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>