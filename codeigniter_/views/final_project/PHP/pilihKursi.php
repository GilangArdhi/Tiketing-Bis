<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilihKursi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

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
            <tr class="text-center tr-data-row">
                        <td class="logoBis">
                            <!-- < ?php
                            // Mengambil data BLOB dari database
                            $blobData = $jadwal->logo;

                            // Mengatur tipe konten header
                            // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                        
                            // Konversi data BLOB menjadi URL gambar
                            $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                            ?>
                            < !-- Menampilkan gambar -->
                            <!--img src="< ?php echo $imageURL; ?>" class="img-fluid w-75" alt="Logo"> -->
                            <!-- < ?php echo $jadwal->logo ?> -->
                            <!-- < ?php echo $blobData ?> -->
                        </td>
                        <td>
                            <div class="jamBerangkat">
                                <?php echo $dataBis['jamBerangkat'] ?>
                            </div>
                            <div class="text-secondary terminalAwal">
                                <?php echo $dataBis['terminalAwal'] ?>
                            </div>
                        </td>
                        <td class="text-secondary durasi">
                            <?php echo $dataBis['durasi'] ?> j
                        </td>
                        <td>
                            <div class="jamDatang">
                                <?php echo $dataBis['jamDatang'] ?>
                            </div>
                            <div class="text-secondary terminalTujuan">
                                <?php echo $dataBis['terminalTujuan'] ?>
                            </div>
                        </td>
                        <td class="kelas">
                            <?php echo $dataBis['kelas']?>
                        </td>
                        <td class="hargaTiket">
                            <?php echo $dataBis['hargaTiket'] ?>
                        </td>

                    </tr>
            </tbody>
        </table>
        <div class="row bg-light">
            <div class="col-8">
                <div class="container bg-danger px-4 text-white">
                    Klik pilihan kursi yang tersedia kemudian lanjut ke bagian pembayaran.
                </div>
                <div class="container mt-5 mx-4 p-3 border">
                    <!--baris 1  -->
                    <div class="row">
                        <div class="col-3">
                            <img src="./final_project/Pemesanan_Tiket_Bus/steeringwheel.png" class="img-fluid w-25 mt-2 mx-5"
                                alt="steeringwheel">
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
                        <div class="col-3"></div>
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
                        <div class="col-3"></div>
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
                        <div class="col-3"></div>
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
                <div class="modal" id="showOffElement">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi Pemesanan</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Apakah kamu yakin dengan pilihan kursi saat ini?
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal"
                                    id="changePage">Ya</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="closeModal">Tidak</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4" id="col1">
                <!-- <div class="container"> -->
                <div class="mx-5">
                    <h2>Keterangan Kursi</h2>
                    <button type="button" class="btn btn-light border-dark p-3" disabled></button>
                    <label for="button">Tersedia</label>
                    <button type="button" class="btn btn-secondary border-dark p-3" disabled></button>
                    <label for="button">Tidak Tersedia</label>
                </div>
                <!-- </div> -->
            </div>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        const kursiElements = document.getElementsByClassName('kursi');
        const kursiTerpilihClass = 'kursiTerpilih';
        const kursiDipilih = [];
        const showOffElement = document.getElementById('showOffElement');
        const closeModalButton = document.getElementById('closeModal');
        const changePage = document.getElementById('changePage')

        function toggleKursiTerpilih() {
            const kursiNumber = this.getAttribute('data-kursi-number');
            const index = kursiDipilih.indexOf(kursiNumber);
            const maxPilih = 2;

            if (index > -1) {
                kursiDipilih.splice(index, 1);
                this.classList.toggle(kursiTerpilihClass);
            } else if (kursiDipilih.length < maxPilih) {
                this.classList.toggle(kursiTerpilihClass);
                kursiDipilih.push(kursiNumber);
                selectSeat(kursiNumber);
                if (kursiDipilih.length === maxPilih) {
                    showOffElement.classList.add('show');
                }
            } else {
                console.log('Maximal Kursi yang dipilih telah tercapai!!!');
            }

            console.log('kursi yang dipilih: ', kursiDipilih);
            console.log('panjang array: ', kursiDipilih.length);
        }

        function selectSeat(seatNumber) {
            // localStorage.setItem('selectedSeat', seatNumber);
            localStorage.setItem('selectedSeats', JSON.stringify(kursiDipilih));
        }

        for (let i = 0; i < kursiElements.length; i++) {
            kursiElements[i].addEventListener('click', toggleKursiTerpilih);
        }
        function pindahHalaman() {
            window.location.href = "pesan.html"
        }

        function closeModal() {
            showOffElement.classList.remove('show');
            kursiDipilih.splice(0, kursiDipilih.length);
            for (let i = 0; i < kursiElements.length; i++) {
                kursiElements[i].classList.remove(kursiTerpilihClass);
            }
            localStorage.removeItem('selectedSeat');
        }

        closeModalButton.addEventListener('click', closeModal);
        changePage.addEventListener('click', pindahHalaman);

    </script>
    <script>
        var baseUrl = "<?php echo base_url(); ?>";
        $.ajax({
            url: baseUrl + "Home/dataPilihBis",
            method: 'GET',
            // data: {
            //     'jamKeberangkatan': chld.text().trim(),
            //     'terminalAwal': terminalAwal.text().trim(),
            //     'durasi': durasi.text().trim(),
            //     'jamDatang': datang.text().trim(),
            //     'terminalTujuan': terminalTujuan.text().trim(),
            //     'kelas': kelas.text().trim(),
            //     'hargaTiket': hargaTiket.text().trim(),
            // },
            success: function (data) {
                show(data, $(document))

                // Menampilkan data yang diterima dari server
                // console.log(data);

                // Mengakses nilai spesifik dalam respons JSON
                // var status = data.jamBerangkat;
                // var message = response.message;

                // Melakukan operasi lain sesuai kebutuhan Anda
                // Contoh: Mengganti teks pada elemen dengan ID "status"
                // var statusElement = document.getElementsByClassName("jamBerangkat");
                // statusElement.textContent = status;

                // Memperbarui tampilan halaman dengan data yang diterima
                // Contoh: Menampilkan pesan di elemen dengan ID "message"
                // var messageElement = document.getElementById("message");
                // messageElement.innerHTML = "<p>" + message + "</p>";
            },
            error: function (xhr, status, error) {
                // Menampilkan pesan error jika terjadi kesalahan
                console.log(error);
            }
        });
        console.log(data);

</body >

</html >