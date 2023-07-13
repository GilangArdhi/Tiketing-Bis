<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Profil</title>
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
    .icon {
        font-size: 3rem;
        margin-left: 20px;
    }

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

<body>
    <header>

        <div class="container-fluid bg-white">
            <!-- Header LOGO -->
            <nav class="navbar bg-white">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url() ?>assets/Pemesanan_Tiket_Bus/travelin-logo-zip-file(1)/png/logo-no-background.png"
                            class="img-fluid w-25 p-1" alt="logo">
                    </a>
                    <div class="dropdown float-end d-flex align-items-center">
                        <?php if (!empty($userData)): ?>
                            <a type="button" class="btn nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                                <?php echo $userData->nama; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>profil"><i class="bi bi-person"></i> Profil</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-clock-history mx-2"></i> Riwayat</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>faq"><i class="bi bi-info-circle"></i> FAQ</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>hubungikami"><i class="bi bi-chat-left-text"></i> Hubungi Admin</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>tentangKami"><i class="bi bi-gear"></i> Tentang Kami</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary">
            <!-- Edit Profil -->
            <div class="col-md-10 d-flex align-content-start py-3">
                <div>
                    <a class="btn btn-primary bi bi-arrow-left arrow text-white"
                        href="<?php echo base_url() ?>profil"></a>
                </div>
                <div class="d-flex align-items-center">
                    <h5 class="text-white text-center ms-3 my-2 mx-auto">Edit Profil</h5>
                </div>
            </div>
        </div>
    </header>

    <section class="container">
        <!-- <form id="editForm" > -->
        <?php echo form_open('Home/editData') ?>
        <div class="row">
            <div class="col-md-6">
                <!-- Ubah Foto Profil -->
                <div class="row">
                    <div class="col-md-2 d-flex align-content-center">
                        <div class="camera">
                            <i class="bi bi-camera icon"></i>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-content-start px-3 py-3">
                        <div class="profile-picture">
                            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTMG-NCFt41ae8yDUhZjRUkIdhpx0xjHyMuGzbUoyHtSKcIpKc8"
                                width="150px" alt="fotoprofil">
                        </div>
                    </div>
                </div>
                <!--hr class="grsk1"-->

                <!-- Jenis Kelamin -->
                <div class="row">
                    <div class="col-md-2 d-flex align-content-start">
                        <div class="person py-2">
                            <i class="bi bi-person icon"></i>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center px-4 py-4">
                        <div class="gender">
                            <b>Jenis Kelamin</b>
                            <p></p>
                            <select name="jenis_kelamin" class="form-select">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki - Laki" <?php echo ($userData->jenis_kelamin == 'Laki - Laki') ? 'selected' : ''; ?>>Laki - Laki</option>
                                <option value="Perempuan" <?php echo ($userData->jenis_kelamin == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                            </select>
                            <!--span><input type="radio" name="jeniskelamin" value="Laki-Laki"> Laki - Laki
                        &nbsp;&nbsp;<input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan</span-->
                        </div>
                    </div>
                </div>
                <!--hr class="grsk1"-->

                <!-- Ubah Password -->
                <div class="row py-5">
                    <div class="col-md-2 d-flex align-content-start">
                        <div class="person">
                            <i class="bi bi-shield-lock icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center px-4">
                        <div class="shield">
                            <b>Ubah Password</b>
                            <a href="<?php echo base_url()?>UbahSandi" class="btn btn-primary text-white">Ubah Sandi</a>
                            <!-- <input type="password" name="pass" id="inputPassword"> -->
                            <p id="passwordErrorMessage" style="color: red; display: none;">Silahkan input password
                                dengan benar!</p>
                            <p></p>
                            <!-- <b>Ketik ulang Password</b>
                            <input type="password" name="pass1" id="inputPassword2">
                            <p></p>
                            <input type="checkbox" onclick="tampilpw()">Tampilkan Password
                            <p></p>
                            < !--button onclick="validasiPassword()" class="submit-button bg-primary text-white border-white float-end">Simpan</button- ->
                            <p id="passwordError" style="color: red; display: none;">Password tidak sesuai!</p>
                            <p id="successMessage" style="color: green; display: none;">Password berhasil direset!</p> -->
                        </div>
                    </div>
                </div>

            </div>

            <!--Kolom 2-->
            <div class="col-md-6">



                <!-- Nama Lengkap dan Usia -->
                <div class="row">
                    <div class="col-md-2 d-flex align-content-start">
                        <div class="person-vcard">
                            <i class="bi bi-person-vcard icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center px-4 my-3">
                        <div class="nama-lengkap">
                            <b>Nama Lengkap</b>
                            <input type="text" name="txtnama" value="<?php echo $userData->nama ?>">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-2 d-flex align-content-start">
                        <div class="person-vcard">
                            <i class=" icon"></i>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center px-4 my-3">
                        <div class="usia">
                            <b>Usia</b>
                            <input type="number" id="usia-input" name="age" value="<?php echo $userData->umur ?>">
                            <p></p>
                            <!--button onclick="return validasiUsia()" class="submit-button bg-primary text-white border-white float-end">Simpan</button-->
                        </div>
                    </div>
                </div>

                <!-- Nomor Ponsel -->
                <div class="row py-5">
                    <div class="col-md-2 d-flex align-content-start ">
                        <div class="phone">
                            <i class="bi bi-telephone icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center px-4">
                        <div class="no-ponsel">
                            <b> No. Ponsel</b>
                            <p></p>
                            <input type="text" name="nohp" id="nomor-ponsel-input" oninput="validatePhoneNumber()" value="<?php echo $userData->noHP ?>">
                        </div>
                    </div>
                </div>
                <!--hr class="grsemail"-->

                <!-- Ubah Email -->
                <!-- <div class="row py-5">
                    <div class="col-md-2 d-flex align-content-start">
                        <div class="envelope">
                            <i class="bi bi-envelope icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center px-4">
                        <div class="email">
                            <b>Ubah Email</b>
                            <input type="text" name="txtemail" id="inputEmail">
                            < !--p id="emailErrorMessage" style="color: red; display: none;">Pastikan data terisi dengan benar sebelum klik <b>Simpan</b></p-- >
                            <p></p>
                            < !--button onclick="validasiEmail()"
                            class="submit-button bg-primary text-white border-white float-end">Simpan</button-- >
                            <p id="emailSuccessMessage" style="color: green; display: none;">Email anda berhasil diubah!
                                < !--br> Link verifikasi telah dikirim ke email kamu. <br> Segera cek email dan klik tombol <b>Verifikasi Email</b-- >
                            </p>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-6 py-5 text-end">
                        <!--button class="submit-button bg-primary text-white border-white float-end">SELESAI</button-->

                        <button type="submit" class="btn btn-primary text-white">SELESAI</button>
                    </div>
                </div>


            </div>

        </div>
        <?php echo form_close(); ?>
        <br><br>

    </section>
    <!-- 
< ?php
// Memproses permintaan pengubahan data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data yang dikirim melalui form
        $nama = $_POST["txtnama"];
        $umur = $_POST["age"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $noHP = $_POST["nohp"];
        $email = $_POST["txtemail"];
        $pass = $_POST["pass"];

        // Melakukan query untuk mengupdate data pengguna
        $query = "UPDATE users SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', noHP='$noHP', email='$email', pass='$pass' WHERE id_user=18"; // Ganti 'nama_tabel' dan 'id' sesuai dengan struktur tabel Anda

        if (mysqli_query($koneksi, $query)) {
            echo "";
        } else {
            echo "" . mysqli_error($koneksi);
        }
    }
    mysqli_close($koneksi);
?> -->


    <script>
        // function submitForm(event) {
        //     event.preventDefault();
        // }

        function tampilpw() {
            var inputPassword = document.getElementById("inputPassword");
            var inputPassword2 = document.getElementById("inputPassword2")

            if (inputPassword.type === "password") {
                inputPassword.type = "text";
                inputPassword2.type = "text";
            } else {
                inputPassword.type = "password";
                inputPassword2.type = "password";
            }
        }

        function validasiPassword() {
            var inputPassword = document.getElementById("inputPassword");
            var inputPassword2 = document.getElementById("inputPassword2");
            var passwordErrorMessage = document.getElementById("passwordErrorMessage");
            var passwordError = document.getElementById("passwordError");
            var successMessage = document.getElementById("successMessage");

            if (inputPassword.value === "") {
                passwordErrorMessage.style.display = "block";
                passwordError.style.display = "none";
                successMessage.style.display = "none";
            } else if (inputPassword.value.length < 6) {
                alert("Password harus memiliki minimal 6 karakter");
            }
            else if (inputPassword.value !== inputPassword2.value) {
                passwordErrorMessage.style.display = "none";
                passwordError.style.display = "block";
                successMessage.style.display = "none";
            } else {
                passwordErrorMessage.style.display = "none";
                passwordError.style.display = "none";
                successMessage.style.display = "block";
                alert("Password anda telah berhasil diubah!");
            }
        }


        function validasiEmail() {
            var inputEmail = document.getElementById("inputEmail");
            var emailErrorMessage = document.getElementById("emailErrorMessage");
            var emailSuccessMessage = document.getElementById("emailSuccessMessage");

            var emailValue = inputEmail.value;
            var atSymbolCount = (emailValue.match(/@/g) || []).length;
            //var dotSymbolCount = (emailValue.match(/\./g) || []).length; || dotSymbolCount !== 1

            if (atSymbolCount !== 1) {
                emailErrorMessage.style.display = "block";
                emailSuccessMessage.style.display = "none";
                alert("Mohon masukkan format email dengan benar");
            } else {
                emailErrorMessage.style.display = "none";
                emailSuccessMessage.style.display = "block";
                alert("Email anda telah berhasil diubah!");
            }
        }


        function validatePhoneNumber() {
            var nomorPonselInput = document.getElementById('nomor-ponsel-input');
            var inputValue = nomorPonselInput.value;

            // Menghapus semua karakter kecuali angka dan tanda '+'
            inputValue = inputValue.replace(/[^\d+]/g, '');


            // Memastikan hanya ada satu tanda '+'
            if ((inputValue.match(/\+/g) || []).length > 1) {
                inputValue = inputValue.replace(/\+/g, '');
            }

            // Mengupdate nilai input dengan hasil validasi
            nomorPonselInput.value = inputValue;
        }


        function toggleDropdown() {
            var dropdownContent = document.getElementById("myDropdown");
            if (dropdownContent.style.display === "none") {
                dropdownContent.style.display = "block";
            } else {
                dropdownContent.style.display = "none";
            }
        }

        function validasiUsia() {
            var usiaInput = document.getElementById("usia-input").value;

            if (usiaInput < 0) { // Memeriksa apakah usia kurang dari 0
                alert("Usia tidak boleh negatif!");
                return false;
            } else if (usiaInput < 18) {
                alert("Mohon maaf, anda harus berusia minimal 18 tahun!");
                return false;
            } else if (usiaInput > 75) {
                alert("Mohon maaf, batas usia pengguna maksimal 75 tahun!");
                return false;
            }

            alert("Data berhasil disimpan!");
            return true;
        }


        function submitForm() {
            // Mendapatkan referensi form menggunakan ID
            var form = document.getElementById("editForm");

            // Mengirimkan formulir
            form.submit();

            alert("Data berhasil diperbarui")
        }




    </script>
    <!-- </form> -->
</body>

</html>