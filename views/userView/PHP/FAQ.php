<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .icon-list {
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
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
</head>

<body>
  <header>
    <div class="container-fluid bg-white">
      <nav class="navbar bg-white">
        <div class="row">
          <div class="col-8 d-flex align-items-center">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                  src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png"
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
                  <a type="button" class="btn nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                    <?php echo $userData->nama; ?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>profil"><i class="bi bi-person"></i>
                        Profil</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>riwayatPembelian"><i
                          class="bi bi-clock-history"></i> Riwayat</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>faq"><i class="bi bi-info-circle"></i>
                        FAQ</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>hubungikami"><i
                          class="bi bi-chat-left-text"></i> Hubungi Admin</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>tentangKami"><i class="bi bi-gear"></i>
                        Tentang Kami</a></li>
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
          <h5 class="text-white text-center ms-3 my-2 mx-auto">FAQs (Frequently Asked Questions)</h5>
        </div>
      </div>
    </div>
  </header>

  <section class="container">
    <div class="accordion mt-3 " id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
            aria-controls="panelsStayOpen-collapseOne">
            Bagaimana cara menggunakan Travelin untuk memesan tiket bus?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
          <div class="accordion-body">
            <ol>
              <li>Membuat akun terlebih dahulu</li>
              <li>Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik ‘Cari’</li>
              <li>Pilih bis, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang dan klik ‘Pembayaran’
              </li>
              <li>Pilih metode pembayaran yang diinginkan dan klik ‘Bayar’</li>
              <li>Selesaikan pembayaran dalam waktu 45 menit</li>
              <li>Setelah selesai melakukan pembayaran, kemudian klik ‘Saya sudah melakukan pembayaran’</li>
              <li>Kemudian, tiket akan otomatis terkirim melalui Whatsapp</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseTwo">
            Bagaimana cara membuat akun di Travelin?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body">
            Berikut adalah langkah-langkah untuk membuat akun di Travelin:
            <ol>
              <li>Buka website Travelin di perangkat Anda.</li>
              <li>Pilih opsi "Daftar Sekarang".</li>
              <li>Isi formulir pendaftaran dengan informasi yang diperlukan, seperti nama, alamat email, dan kata sandi.
              </li>
              <li>Klik tombol "Saya menyetujui syarat dan ketentuan".</li>
              <li>Kemudian, klik tombol "Daftar".</li>
              <li>Kemudian, anda dapat masuk ke halaman utama Travelin.</li>
            </ol>
            Jika Anda mengalami kesulitan dalam proses pendaftaran atau memiliki pertanyaan lebih lanjut, jangan ragu
            untuk menghubungi tim dukungan pelanggan kami.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseThree">
            Apa saja jenis pembayaran yang diterima oleh Travelin?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body">
            Travelin menerima berbagai jenis pembayaran, termasuk:
            <ul>
              <li>Transfer bank (misalnya, BCA)</li>
              <li>Pembayaran digital (misalnya, GoPay)</li>
            </ul>
            Pastikan untuk memeriksa halaman pembayaran saat Anda melakukan transaksi untuk melihat pilihan pembayaran
            yang tersedia.
          </div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseFour">
            Bagaimana jika perlu membatalkan atau mengubah tiket yang sudah dibeli?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
          <div class="accordion-body">
            Kebijakan pembatalan atau perubahan tiket dapat berbeda antara masing-masing operator bus dan website.
            Sebaiknya Anda membaca syarat dan ketentuan yang berlaku pada aplikasi yang digunakan. Beberapa aplikasi
            mungkin memiliki kebijakan pembatalan atau perubahan dengan biaya tambahan, sedangkan yang lain mungkin
            tidak memperbolehkan pembatalan atau perubahan sama sekali. Pastikan untuk memeriksa kebijakan ini sebelum
            melakukan pembelian tiket.
          </div>
        </div>
      </div>
    </div>
  </section>

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