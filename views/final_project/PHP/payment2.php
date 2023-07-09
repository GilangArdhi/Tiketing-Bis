<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-sa_fZ2I97BwkcRQg"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

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
        <?php foreach ($jadwalTerpilih as $jadwal): ?>
            <div class="row">
                <div class="col-6">
                    <div class="container bg-white mx-md-3 my-4 p-4">
                        <div class="row">
                            <div class="col-3">
                                <div class="text-primary px-3" id="hari" style="font-size: 40px;">hari</div>
                                <div id="tahun">bulan tahun</div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <?php echo $objFilter['kotaAsal'] ?> -
                                    <?php echo $objFilter['tujuanKota'] ?>
                                </div>
                                <div name="namaBis">
                                    <?php echo $jadwal->nama ?>
                                </div>
                                <div name="kelas">
                                    <?php echo $jadwal->kelas ?>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>Kode Pemesanan : </div>
                            </div>
                        </div>
                        <div class="row border-top mt-3 pt-2">
                            <div class="col-4">
                                <div class="text-muted"><b>Berangkat</b></div>
                                <div name="terminalAwal">
                                    <?php echo $jadwal->terminalAwal ?>
                                </div>
                                <div class="text-muted mt-3"><b>Atas Nama</b></div>
                                <!-- < ?php foreach($rincian as $rinci): ?> -->
                                <!-- < ?php if (!empty($rincian['namaPembeli'])): ?> -->
                                <div>
                                    <?php echo $userData->nama; ?>
                                </div>
                                <!-- < ?php endif; ?> -->
                                <!-- < ?php endforeach; ?> -->
                            </div>
                            <div class="col-4">
                                <div class="text-muted d-flex justify-content-center"><b>Keberangkatan</b></div>
                                <div class="d-flex justify-content-center" name="jamBerangkat">
                                    <?php echo $jadwal->jamBerangkat ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-muted d-flex justify-content-end"><b>Jumlah Penumpang</b></div>
                                <div class="d-flex justify-content-end">
                                    <?php echo $objFilter['jmlPenumpang'] ?>
                                </div>
                                <div class="text-muted d-flex justify-content-end mt-3"><b>Nomor Kursi</b></div>
                                <div class="d-flex justify-content-end" id="kursi">selectedSeat</div>
                            </div>
                        </div>
                    </div>
                    <div class="container bg-white mx-md-3 my-2 p-1">
                        <?php foreach ($dipilihBank as $bank): ?>
                            <div class="container-fluid bg-warning">
                                <i class="bi bi-clock">
                                    <b>Silakan selesaikan pemesanan anda dalam
                                        <?php echo $hitunganMundur; ?>menit
                                    </b>
                                </i>
                            </div>
                            <div class="mt-3">
                                <?php
                                // Mengambil data BLOB dari database
                                $blobData = $bank->logo_bank;

                                // Mengatur tipe konten header
                                // header('Content-Type: image/jpeg'); mengeluarkan konten gambar BLOB langsung di tengah tampilan HTML
                        
                                // Konversi data BLOB menjadi URL gambar
                                $imageURL = 'data:image/jpeg;base64,' . base64_encode($blobData);
                                ?>
                                <!-- Menampilkan gambar -->
                                <img src="<?php echo $imageURL; ?>" class="img-fluid rounded w-25 p-1" alt="logo">
                            </div>
                            <!-- <div class="container bg-light my-3 p-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="text-muted">
                                            Kode Pembayaran Rekening
                                        </div>
                                        <div>
                                            <?php echo $bank->nomor_rek ?>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-muted">Jumlah yang harus dibayar</div>
                                        <div name="jumlahTotal">
                                            <?php echo $jadwal->harga * $objFilter['jmlPenumpang'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <?php endforeach; ?>
                        <div class="text-muted">Intruksi Pembayaran</div>

                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Input kartu ATM dan PIN anda</li>
                            <li class="list-group-item">Pilih Menu Transaksi Lainnya</li>
                            <li class="list-group-item">Pilih Transfer</li>
                            <li class="list-group-item">Pilih Ke Rekening BCA Virtual Account </li>
                            <li class="list-group-item">Input Nomor Virtual Account</li>
                            <li class="list-group-item">Pilih Benar</li>
                            <li class="list-group-item">Pilih Ya</li>
                            <li class="list-group-item">Ambil bukti bayar Anda</li>
                            <li class="list-group-item">Selesai</li>
                        </ol>

                        <div class="container border-top mt-5 mb-3">
                            <div class="d-flex justify-content-center pt-3">
                                E-tiket akan otomatis dikirim melalui SMS dan email, ketika pembayaran telah dikonfirmasi.
                            </div>
                            <div class="d-flex justify-content-center">Jika anda sudah melakukan pembayaran, tekan tombol
                                untuk mengetahui status pemesanan anda</div>
                            <div class="d-flex justify-content-center">
                                <button type="button" id="pay-button" class="btn btn-primary px-4 mt-3"><b>BAYAR
                                        SEKARANG</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="container-sm bg-white mt-3 p-4">
                        <div class="container ">
                            <h5 class="container-fluid text-primary d-flex justify-content-center">Rincian Harga</h5>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-muted">
                                Harga selanjutnya
                            </div>
                            <div class="col text-muted d-flex justify-content-end">
                                <?php echo $jadwal->harga ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col text-dark">
                                <b>Total Harga</b>
                            </div>
                            <div class="col text-dark d-flex justify-content-end" name="jumlahTotal">
                                <?php echo $jadwal->harga * $objFilter['jmlPenumpang'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <input type="hidden" name="hargaTiket" value="<?php echo $jadwal->harga ?>">
                <input type="hidden" name="terminalTujuan" value="<?php echo $jadwal->terminalTujuan ?>">
                <input type="hidden" name="jamDatang" value="<?php echo $jadwal->jamDatang ?>">
                <input type="hidden" name="kd_jadwal" value="<?php echo $jadwal->kd_jadwal ?>">
            </div>
        <?php endforeach; ?>
    </section>
    <script type="text/javascript">
        var objFilter = <?php echo json_encode($objFilter) ?>;
        var userData = <?php echo json_encode($userData) ?>;
        // const selectedSeatsString = localStorage.getItem('selectedSeats');
        // const selectedSeats = JSON.parse(selectedSeatsString);
        var namaBis = document.querySelector('div[name="namaBis"]').textContent.trim();
        var kelas = document.querySelector('div[name="kelas"]').textContent.trim();
        var hargaTiket = document.querySelector('input[name="hargaTiket"]').value.trim();
        var jumlahTotal = document.querySelector('div[name="jumlahTotal"]').textContent.trim();
        var terminalAwal = document.querySelector('div[name="terminalAwal"]').textContent.trim();
        var jamBerangkat = document.querySelector('div[name="jamBerangkat"]').textContent.trim();
        var terminalTujuan = document.querySelector('input[name="terminalTujuan"]').value.trim();
        var jamDatang = document.querySelector('input[name="jamDatang"]').value.trim();
        var kd_jadwal = document.querySelector('input[name="kd_jadwal"]').value.trim();
        console.log(namaBis);
        console.log(kelas);
        console.log(hargaTiket);
        console.log(jumlahTotal);
        console.log(terminalAwal);
        console.log(jamBerangkat);
        console.log(terminalTujuan);
        console.log(jamDatang);
        // var jadwalTerpilih = < ?php echo json_encode($jadwalTerpilih) ?>
        console.log(objFilter);
        console.log(userData);
        // console.log(jadwalTerpilih);
        $('#pay-button').click(function (event) {
            event.preventDefault();
            $(this).attr("disabled", "disabled");

            $.ajax({
                method: 'POST',
                url: '<?= site_url() ?>/snap/token',
                cache: false,
                data: {
                    jmlPenumpang: objFilter.jmlPenumpang,
                    tglBerangkat: objFilter.tglBerangkat,
                    tglPulang: objFilter.tglPulang,
                    namaUser: userData.nama,
                    idUser: userData.id_user,
                    emailUser: userData.email,
                    noHpUser: userData.noHP,
                    namaBis: namaBis,
                    kelas: kelas,
                    hargaTiket: hargaTiket,
                    jumlahTotal: jumlahTotal,
                    terminalAwal: terminalAwal,
                    jamBerangkat: jamBerangkat,
                    terminalTujuan: terminalTujuan,
                    jamDatang: jamDatang,
                    kd_jadwal: kd_jadwal,
                    selectedSeats: selectedSeatsText
                },

                success: function (data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                        onSuccess: function (result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function (result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function (result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });

    </script>
    <script>
        const selectedSeatsString = localStorage.getItem('selectedSeats');
        const selectedSeats = JSON.parse(selectedSeatsString);
        const selectedSeatsText = selectedSeats.join(', ');
        const kursiElement = document.getElementById('kursi');
        console.log(selectedSeatsText);

        // Menetapkan nilai selectedSeats ke elemen kursi
        kursiElement.textContent = selectedSeats;

        const dataTanggal = new Date('<?php echo json_encode($objFilter['tglBerangkat']) ?>')

        // Mengambil tanggal, bulan, dan tahun dari data tanggal
        const tanggal = dataTanggal.getDate();
        const bulan = dataTanggal.getMonth() + 1; // Perlu ditambahkan 1 karena indeks bulan dimulai dari 0
        const tahun = dataTanggal.getFullYear();

        // Menggabungkan tanggal, bulan, dan tahun menjadi format yang diinginkan (DD/MM/YYYY)
        const formatTanggalBerangkat = `${tanggal}`;
        const formatTanggal = `${bulan} ${tahun}`;
        const tanggalElement = document.getElementById('hari')
        const tahunElement = document.getElementById('tahun');
        tanggalElement.textContent = formatTanggalBerangkat;
        tahunElement.textContent = formatTanggal;

    </script>
</body>

</html>