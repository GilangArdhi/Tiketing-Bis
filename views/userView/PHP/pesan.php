<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RincianPenumpang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .btnColor.clicked {
            background-color: darkgray;
        }

        .kursi {
            width: 90px;
            height: 75px;
            margin: 5px;
            background-color: rgb(255, 255, 255);
            border: solid black 1px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .kursiTerpilih {
            background-color: darkgrey;
        }

        #showOffElement {
            display: none;
        }

        #showOffElement.show {
            display: block;
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
                                        <li><a class="dropdown-item bg-danger" href="<?php echo base_url('Home/logout') ?>">Keluar</a></li>
                                    </ul>
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
                        <button class="btn btn-primary d-flex align-items-center my-3 mx-4">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <table class="table">
            <thead class="text-center">
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
                <?php foreach ($jadwalTerpilih as $index => $jadwal): ?>
                    <tr class="text-center tr-data-row">
                        <td class="logoBis">
                            <!-- < ?php
                            // Mengambil data BLOB dari database
                            $blobData = $jadwal->logo;

                            // Mengatur tipe konten header
                            // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                        
                            // Konversi data BLOB menjadi URL gambar
                            $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                            ?> -->
                            <!-- Menampilkan gambar -->
                            <!-- <img src="<?php echo $imageURL; ?>" class="img-fluid w-50" alt="Logo"> -->
                            <img src="<?php echo base_url('assets/' . $jadwal->logo) ?>" class="img  p-1 w-50"
                                alt="fotoprofil">
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
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row bg-light">
            <div class="col-8">
                <div class="container bg-danger px-4 text-white">
                    Klik pilihan kursi yang tersedia kemudian lanjut ke bagian pembayaran.
                </div>
                <div class="container mt-5 mx-1 py-2 border">
                    <!--baris 1  -->
                    <div class="row">
                        <div class="col-2 px-4">
                            <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/steeringwheel.jpeg"
                                class="img-fluid  mt-2 mx-4" alt="steeringwheel">
                        </div>
                        <div class="col-9">
                            <div class="d-flex justify-content-center">
                                <div class="kursi" data-kursi-number="1D">1D</div>
                                <div class="kursi" data-kursi-number="2D">2D</div>
                                <div class="kursi" data-kursi-number="3D">3D</div>
                                <div class="kursi" data-kursi-number="4D">4D</div>
                                <div class="kursi" data-kursi-number="4">4</div>
                                <div class="kursi" data-kursi-number="8">8</div>
                                <div class="kursi" data-kursi-number="12">12</div>
                                <div class="kursi" data-kursi-number="16">16</div>
                                <div class="kursi" data-kursi-number="18">18</div>
                            </div>
                        </div>
                    </div>
                    <!--baris 2  -->
                    <div class="row mt-1">
                        <div class="col-2"></div>
                        <div class="col-9">
                            <div class="d-flex justify-content-center">
                                <div class="kursi" data-kursi-number="1C">1C</div>
                                <div class="kursi" data-kursi-number="2C">2C</div>
                                <div class="kursi" data-kursi-number="3C">3C</div>
                                <div class="kursi" data-kursi-number="4C">4C</div>
                                <div class="kursi" data-kursi-number="3">3</div>
                                <div class="kursi" data-kursi-number="7">7</div>
                                <div class="kursi" data-kursi-number="11">11</div>
                                <div class="kursi" data-kursi-number="15">15</div>
                                <div class="kursi" data-kursi-number="17">17</div>
                            </div>
                        </div>
                    </div>
                    <!--  baris 3 -->
                    <div class="row mt-5">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="d-flex justify-content-center">
                                <div class="kursi" data-kursi-number="1B">1B</div>
                                <div class="kursi" data-kursi-number="2B">2B</div>
                                <div class="kursi" data-kursi-number="3B">3B</div>
                                <div class="kursi" data-kursi-number="4B">4B</div>
                                <div class="kursi" data-kursi-number="2">2</div>
                                <div class="kursi" data-kursi-number="6">6</div>
                                <div class="kursi" data-kursi-number="10">10</div>
                                <div class="kursi" data-kursi-number="14">14</div>
                            </div>
                        </div>
                    </div>
                    <!-- Baris 4 -->
                    <div class="row mt-1">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="d-flex justify-content-center">
                                <div class="kursi" data-kursi-number="1A">1A</div>
                                <div class="kursi" data-kursi-number="2A">2A</div>
                                <div class="kursi" data-kursi-number="3A">3A</div>
                                <div class="kursi" data-kursi-number="4A">4A</div>
                                <div class="kursi" data-kursi-number="1">1</div>
                                <div class="kursi" data-kursi-number="5">5</div>
                                <div class="kursi" data-kursi-number="9">9</div>
                                <div class="kursi" data-kursi-number="13">13</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning" id="showOffElement">
                    <strong>Warning!</strong> Batas kursi yang dipilih telah tercapai.
                </div>
            </div>
            <div class="col-4" id="col2">
                <div class="row">
                    <h5><b>Titik Naik & Titik Turun</b></h5>
                </div>
                <?php foreach ($jadwalTerpilih as $index => $jadwal): ?>
                <div class="row border-top mt-3">
                    <div class="row mt-3">
                        <div class="col"><?php echo $jadwal->terminalAwal ?></div>
                        <div class="col text-end"><?php echo $jadwal->jamBerangkat ?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"><?php echo $jadwal->terminalTujuan ?></div>
                        <div class="col text-end"><?php echo $jadwal->jamDatang ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="row border-top mt-3">
                    <div class="col"><b>Nomor kursi</b></div>
                    <div class="col text-end" id="pilihan"></div>
                </div>
                <div class="row">
                    <div class="col"><b>Harga</b></div>
                    <div class="col text-end" name="totHarga" id="harga"><b>
                            <?php echo $jadwal->harga * $objFilter['jmlPenumpang'] ?>
                        </b></div>
                </div>
                <div class="row">
                    <div class="container d-flex align-items-center mx-5 px-5">
                        <div type="button" class="btn btn-primary m-4 px-5" data-bs-toggle="offcanvas"
                            data-bs-target="#rincian">LANJUTKAN PEMESANAN</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- rincian penumpang -->
        <div class="offcanvas offcanvas-end" id="rincian">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title">Rincian Penumpang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <?php echo form_open('Home/rincianPembelian') ?>
                <div id="isiCanvas"></div>
                <div class="row border-top mt-3">
                    <div class="col-sm-5 mt-2 text-"><b>Total Jumlah : </b></div>
                    <div class="col-sm-3 text-end mt-2" id="totHarga" name="totHarga"><b>
                            <?php echo $jadwal->harga * $objFilter['jmlPenumpang'] ?>
                    </div>
                </div>
                <div class="container d-flex align-items-center mx-5">
                    <button type="submit" class="btn btn-primary m-4 px-5">Lanjutkan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>


    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectedSeatsString = localStorage.getItem('selectedSeats');
            const selectedSeats = JSON.parse(selectedSeatsString);
            const isiCanvas = document.getElementById('isiCanvas')

            console.log(selectedSeats);

            if (selectedSeats) {
                const kursiElements = document.getElementsByClassName('kursi');
                const kursiTerpilihClass = 'kursiTerpilih';

                for (let i = 0; i < kursiElements.length; i++) {
                    const kursiNumber = kursiElements[i].getAttribute('data-kursi-number');

                    if (selectedSeats.includes(kursiNumber)) {
                        kursiElements[i].classList.add(kursiTerpilihClass);
                    }
                }

                const nomorKursi = document.getElementById('pilihan');
                nomorKursi.textContent = selectedSeats.join(', ');
            }

            for (let a = 0; a < selectedSeats.length; a++) {
                const div = document.createElement('div');
                let number = a + 1;
                div.innerHTML = `
                    <p class="mt-3 border-top"><i class="bi bi-person-circle"></i> Informasi Penumpang</p>
                    <p>penumpang ${number}</p>
                    <div name="index" value="${number}"></div>
                    <div class="form-group my-2">
                        <label for="inputNama_${number}">Nama</label>
                        <input type="text" class="form-control" id="inputNama_${number}" name="txtnama_${number}" placeholder="Masukkan Nama..."> 
                    </div>
                    <div class="form-group my-2">
                        <label for="inputUmur_${number}">Umur</label>
                        <input type="number" class="form-control" id="inputUmur_${number}" name="txtumur_${number}" placeholder="Masukkan Umur..."> 
                    </div>
                    <p><i  class="bi bi-envelope-fill"></i> Rincian Kontak</p>
                    <div class="form-group my-2">
                        <label for="inputEmail_${number}">Alamat Email</label>
                        <input type="text" class="form-control" id="inputEmail_${number}" name="txtemail_${number}" placeholder="Masukkan Email..."> 
                    </div>
                    <div class="form-group my-2">
                        <label for="inputTlp_${number}">Telephon</label>
                        <input type="text" class="form-control" id="inputTlp_${number}" name="noTlp_${number}" placeholder="Masukkan Nomor Telephone..."> 
                    </div>
                    `;
                isiCanvas.appendChild(div);
            }
        });
    </script>

</body>

</html>