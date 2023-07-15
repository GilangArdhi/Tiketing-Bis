<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang_Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    /*.container {
        margin-left: 20px;
        padding-left: 20px;
    }*/
    .section-container {
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .teks{
        font-size: 22px;
    }
    .note{
        font-size: 18px;
    }
    .btn{
        font-size: 18px;
    }
    .icon{
        font-size: 3rem;
       margin-left: 30px;
    }
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
                        <nav class="nav flex-md-row d-flex align-items-center">
                            <i class="bi bi-clock-history mx-2"></i>
                            <p class="text-center pt-2">|</p>
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
        <div class="container-fluid bg-primary">
            <!-- Tentang Kami -->
            <div class="col-md-10 d-flex align-content-start py-3">
                <div>
                    <a class="btn btn-primary bi bi-arrow-left arrow text-white"></a>
                </div>
                <div class="d-flex align-items-center">
                    <h5 class="text-white text-center ms-3 my-2 mx-auto">Tentang Kami</h5>
                </div>
            </div>
        </div>
    </header>


    <section class="section-container">
        <div class="container">
          <div class="row">

            <!--LOGO TRAVELIN-->
            <div class="col-md-12 text-center">
              <div class="row">
                <div class="col-md-12 d-flex align-items-center justify-content-center py-5">
                  <div class="profile-picture text-center">
                    <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png" width="600px" alt="fotoprofil">
                  </div>
                </div>
              </div>
              
              <!--TEKS-->
              <div class="col-md-12 d-flex align-items-center justify-content-center">
                <div class="teks text-center">
                  <p>Kami adalah Travelin - sebuah organisasi tiket bus online. Di Travelin, anda dapat memeriksa jadwal bus, memilih bus favorit, melakukan pembayaran, dan mendapatkan tiket bus. Semua hanya dengan beberapa klik! Pesan dengan kami untuk pengalaman pemesanan bus yang cepat dan bebas repot!</p>
                </div>
              </div>
            </div>
            
            <!--Versi-->
            <div class="col-md-1 d-flex align-content-center">
                <div class="info">
                    <i class="bi bi-info-circle icon"></i>
                </div>
              </div>

              <div class="col-md-3  d-flex align-content-start px-4 py-4">
                <div class="note">
                    <p>Versi 1.0.0</p>
                </div>
              </div>
              <hr>

              <!--Share-->
              <div class="col-md-1 d-flex align-content-center">
                <div class="share">
                    <i class="bi bi-share icon"></i>
                </div>
              </div>

              <div class="col-md-3 d-flex align-content-start px-4 py-4">
                <div class="note">
                    <!--button type="button" class="btn">Bagikan Kepada Teman</button-->
                    <!--a type="button">Bagikan Kepada Teman</a-->
                    <a type="button" href="#" class="text-decoration-none text-dark">Bagikan Kepada Teman</a>
                    <!--p>Bagikan Kepada Teman</p-->
                </div>
              </div>
              <hr class="mt-2">

              <!--S & K-->
              <div class="col-md-1 d-flex align-content-center">
                <div class="lock">
                    <i class="bi bi-lock icon"></i>
                </div>
              </div>

              <div class="col-md-3 d-flex align-content-start px-4 py-4">
                <div class="note">
                  <a type="button" href="<?php echo base_url() ?>syaratketentuan" class="text-decoration-none text-dark">Syarat dan Ketentuan</a>
                    <!--p>Syarat dan Ketentuan</p-->
                </div>
              </div>
            </div>
        </div>
      </section>
      <br><br><br>

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

