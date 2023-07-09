<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaftarAkun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background {
            background: url(<?php echo base_url()?>assets/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="background">
    <div class="col my-5">
        <div class="container bg-dark text-light p-5 bg-opacity-75" style="width: 580px;">
            <div class="form-group pt-0 mt-3">
                <h1 class="text-center mb-5">DAFTAR</h1>
            </div>
            <!-- <form method="POST" action="daftar.php"> -->
            <!-- < ?php echo validation_errors(); ?> -->
            <?php echo form_open('Home/pendaftaran') ?>
            <div class="form-group pt-2 px-3 mx-3">
                <label for="nama">Nama </label>
                <input type="text" class="form-control d-inline mt-1" id="nama" name="txtnama"
                    placeholder="Masukkan Nama...">
                <?php echo form_error('txtnama') ?>
            </div>
            <div class="form-group pt-2 px-3 mx-3">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="inputEmail"
                    placeholder="Masukkan Email...">
                <?php echo form_error('inputEmail') ?>
            </div>
            <div class="form-group pt-2 px-3 mx-3">
                <label for="inputPass">Password</label>
                <input type="password" class="form-control" id="inputPass" name="inputPass"
                    placeholder="Masukkan Password...">
                <?php echo form_error('inputPass') ?>
            </div>
            <div class="form-group p-3 mx-3">
                <label for="konfirmasiPass">Konfirmasi Password</label>
                <input type="password" class="form-control" id="konfirmasiPass" name="konfirmasiPass" placeholder="Masukkan Password...">
                <?php echo form_error('konfirmasiPass') ?>
                <input type="checkbox" onclick="tampilpw()">Tampilkan Password
            </div>
            <div class="mx-5 mb-4">
                <label><input type="radio" name="pertetujuan" value="agree">
                    Saya setuju dengan persyaratan dan ketentuan
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-2 px-4">Sign Up</button>
            </div>
            <?php echo form_close() ?>
            <!-- </form> -->
        </div>
    </div>

    <script>
        function tampilpw() {
            var inputPassword = document.getElementById("inputPass");
            var inputPassword2 = document.getElementById("konfirmasiPass")
            
            if (inputPassword.type === "password") {
                inputPassword.type = "text";
                inputPassword2.type = "text";
            } else {
                inputPassword.type = "password";
                inputPassword2.type = "password";
            }
        }
    </script>

    <!-- <script>
        function minPassword() {
            var password = document.getElementById("inputPass").value;
            if (password.length < 6) {
                alert("Password harus memiliki minimal 6 karakter!");
                return false;
            }
            return true;
        }
        function validatePass() {
            var password = document.getElementById("inputPass").value;
            var rePassword = document.getElementById("konfirmasiPass").value;

            if (password != rePassword) {
                alert("Silakan cek lagi password yang ditulis");
                return false;
            }

            return true;
        }
        function keHalamanUtama() {
            var phpUrl = "< ?php echo base_url('Home/daftar') ?>"
            if (minPassword() && validatePass()) {
                window.location.href = phpUrl;
            }
        }
    </script> -->
</body>

</html>
<!-- 
< ?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai email dan password dari form
    $email = $_POST['inputEmail'];
    $nama = $_POST['nama'];
    $password = $_POST['inputPass'];

    // Konfigurasi koneksi database
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "travelin";

    try {
        // Buat koneksi PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);

        // Set error mode ke exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query SQL untuk menyimpan data ke tabel pengguna
        $query = "INSERT INTO users (email, nama, , pass) VALUES ( :email, :nama, :pass)";

        // Persiapkan statement
        $statement = $conn->prepare($query);

        // Bind nilai parameter
        $statement->bindParam(":email", $email);
        $statement->bindParam(":nama", $nama);
        $statement->bindParam(":pass", $password);

        // Eksekusi statement
        $statement->execute();

        echo "Data berhasil disimpan ke database!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Tutup koneksi
    $conn = null;
}
?> -->


<!-- pengiriman data dari form ke file PHP   -->
<!-- < ?php
        // Koneksi ke database
        // $servername = "localhost";
        // $username = "username";
        // $password = "password";
        // $dbname = "travelin";

        // $conn = new mysqli($servername, $username, $password, $dbname);
        // if ($conn->connect_error) {
        //     die("Koneksi gagal: " . $conn->connect_error);
        // }

        // // Mengambil nilai email dan password dari formulir login
        // $email = $_POST['email'];
        // $nama = $_POST['nama'];
        // $ = $_POST[''];
        // $password = $_POST['pass'];

        // // Query untuk memasukkan data ke dalam tabel pengguna (user)
        // $sql = "INSERT INTO users (email, nama, , pass) VALUES ('$email', '$nama', '$', '$password')";

        // if ($conn->query($sql) === TRUE) {
        //     echo "Data berhasil dimasukkan ke dalam database.";
        // } else {
        //     echo "Terjadi kesalahan: " . $conn->error;
        // }

        // // Menutup koneksi ke database
        // $conn->close();
    ?> -->