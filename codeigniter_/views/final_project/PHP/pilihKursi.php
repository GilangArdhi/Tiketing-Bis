<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="/final_project/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png" 
                        class="img-fluid w-25 p-1" alt="logo">
                    </a>
                    <div class="float-end">
                        <nav class="nav flex-md-row d-flex align-items-center">
                            <i class="bi bi-clock-history mx-2"></i>
                            <p class="text-center pt-2">|</p>
                            <img src="/final_project/Pemesanan_Tiket_Bus/icons8-male-user-96.png" class="img-fluid rounded-circle w-25 p-1" alt="fotoprofil">
                            <a class="nav-link text-dark" href="#">User</a>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary">
            <div class="row">
                <div class="col-md-10 d-flex justify-content-center py-3">
                    <div>
                        <label for="asalKota"></label>
                        <i class="bi bi-arrow-right text-white"></i>
                        <label for="kotaTujuan"></label>
                    </div>
                    <div>
                        <label for="tglBerangkat"></label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div>
                        <a href="#" class="btn btn-primary d-flex align-items-center my-3 mx-4">Ubah</a>
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
                            <img src="/Pemesanan_Tiket_Bus/steering wheel.jpeg" class="img-fluid w-25 mt-2 mx-5" alt="steeringwheel">
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
                          <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal" id="changePage">Ya</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="closeModal">Tidak</button>
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
            }  else {
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
        function pindahHalaman(){
            window.location.href="pesan.html"
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
       
</body>
</html>