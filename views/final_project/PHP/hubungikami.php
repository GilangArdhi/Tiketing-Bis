<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .icon-list{
       font-size: 25px;
    }
    .dropdown-content {
      display: none;
    }
    /* CSS untuk mengatur tampilan menu dropdown */
    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    position: absolute;
    top: 100%;
    min-width: 170px;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    right: 2px;
    }

    .dropdown-content a {
    display: block;
    padding: 8px 0;
    text-decoration: none;
    color: #333;
    }

    .dropdown-content a:hover {
    background-color: #f1f1f1;
    }
</style>

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
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-chat-left-text"></i> Hubungi Admin</a></li>
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
            <!-- Edit Profil -->
            <div class="col-md-10 d-flex align-content-start py-3">
                <div>
                    <a class="btn btn-primary bi bi-arrow-left arrow text-white"></a>
                </div>
                <div class="d-flex align-items-center">
                    <h5 class="text-white text-center ms-3 my-2 mx-auto">Hubungi Kami</h5>
                </div>
            </div>
        </div>
    </header>
    <!-- <form action="hubkami.php" method="post" target="_blank"> -->
    <div class="container mt-3">
        <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui WhatsApp:</p>
        <!-- <a href="https://wa.me/yourphonenumber" target="_blank" class="btn btn-success">
            Hubungi via WhatsApp
        </a>
        <a href="https://api.whatsapp.com/send?phone=nomor_telepon_anda" target="_blank" class="btn btn-primary" type="button">Chat Via Whatsapp</a> -->
        <div class="mt-3">
        <div class="d-grid">
            <!-- <input type="hidden" name="noWa" value=""> -->
            <!-- <a href="https://api.whatsapp.com/send?phone=nomor_telepon_anda" target="_blank" class="btn btn-primary" type="button">Chat Via Whatsapp</a> -->
            <!-- <button class="btn btn-secondary mx-5 py-3" type="submit" name="submit">Chat Via Whatsapp</button> -->
            <!-- <button type="button" class="btn btn-outline-secondary" disabled>Button</button> -->
            <a href="https://wa.me/6281325214316?text=Hi%20Travelin," class="btn btn-outline-success py-3 mx-3">
                <img src="wa.png" alt="WhatsApp Logo " width="20" height="20">
                Hubungi Kami melalui WhatsApp
            </a>
          </div>
        </div>
    </div>
<!-- </form> -->
    <script>
        function toggleDropdown() {
          var dropdownContent = document.getElementById("myDropdown");
          if (dropdownContent.style.display === "none") {
            dropdownContent.style.display = "block";
          } else {
            dropdownContent.style.display = "none";
          }
        }
    </script>
</body>
</html>