<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
   .arrow{
       top:-20px;
   }
    /*.container {
        margin-left: 20px;
        padding-left: 20px;
    }*/
    .horizontal{
        margin-top: -30px;
    }
    .icon{
       font-size: 3rem;
       margin-left: -10px;
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
        <div class="container-fluid bg-white"> <!-- Header LOGO -->
            <nav class="navbar bg-white">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="Pemesanan_Tiket_Bus/travelin-logo-zip-file (1)/png/logo-no-background.png" 
                        class="img-fluid w-25 p-1" alt="logo">
                    </a>
                    <!--Menu Dropdown-->
                    <div class="dropdown float-end">
                        <button onclick="toggleDropdown()" class="btn bi bi-list icon-list text-black"></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="bi bi-person" href="#">&nbsp; Profil Saya</a>
                            <a class="bi bi-question-circle" href="#">&nbsp; FAQ</a>
                            <a class="bi bi-chat-right-text" href="#">&nbsp; Hubungi Admin</a>
                            <a class="bi bi-gear" href="#">&nbsp; Tentang Kami</a>
                            <a class="btn btn-danger text-center text-white btn-outline-light" href="#">Logout</a>
                        </div>
                    </div> 
                </div>
            </nav>
        </div>
        <div class="container-fluid bg-primary"> <!-- Profil Saya -->
            <div class="col-md-10 d-flex align-items-center px-5 py-3">
                <div>
                    <a class="btn btn-primary bi bi-arrow-left arrow text-white" href="#"></a>
                </div>
                <div class="d-flex align-items-center">
                    <h5 class="text-white text-center ms-3 my-2 mx-auto">Profil Saya</h5>
                </div>
            </div>
        </div>
    </header>
    
    <section class="container">
        <div class="row">
            <div class="col-md-1 d-flex align-content-center px-4 py-4">
                <div class="profile-picture">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTMG-NCFt41ae8yDUhZjRUkIdhpx0xjHyMuGzbUoyHtSKcIpKc8" width="83px" alt="fotoprofil">
                </div>
            </div>
            
            <div class="col-md-2 d-flex align-content-start py-5">
                <div class="nama-lengkap">
                    <b>Nama Lengkap</b><br>
                    <p>Ronaldo</p>
                </div>
            </div>
            <hr class="horizontal">
            
            <div class="col-md-1 d-flex align-content-center px-5">
                <div class="person">
                    <i class="bi bi-person icon"></i>
                </div>
            </div>
            <div class="col-md-2 d-flex align-content-start py-3 px">
                <div class="usia">
                    <b>Usia</b><br>
                    <p>20</p>
                </div>
            </div>
            <hr>
            
            <div class="col-md-1 d-flex align-content-center px-5">
                <div class="gender">
                    <i class="bi bi-gender-ambiguous icon"></i>
                </div>
            </div>
            <div class="col-md-2 d-flex align-content-start py-3 px">
                <div class="jenis-kelamin">
                    <b>Jenis Kelamin</b><br>
                    <p>Laki - Laki</p>
                </div>
            </div>
            <hr> 
            
            <div class="col-md-1 d-flex align-content-center px-5">
                <div class="email">
                    <i class="bi bi-envelope-at icon"></i>
                </div>
            </div>
            <div class="col-md-2 d-flex align-content-start py-3 px">
                <div class="alamat-email">
                    <b>Alamat Email</b><br>
                    <p>ronaldowati123@gmail.com</p>
                </div>
            </div>
            <hr>

            <div class="col-md-1 d-flex align-content-center px-5">
                <div class="password">
                    <i class="bi bi-shield-lock icon"></i>
                </div>
            </div>
            <div class="col-md-2 d-flex align-content-start py-3 px">
                <div class="kata-sandi">
                    <b>Password</b><br>
                    <p>******</p>
                </div>
            </div>
            <hr>

            <div class="col-md-1 d-flex align-content-center px-5">
                <div class="phone">
                    <i class="bi bi-telephone icon"></i>
                </div>
            </div>
            <div class="col-md-2 d-flex align-content-start py-3 px">
                <div class="no-telp">
                    <b>No. Ponsel</b><br>
                    <p>+6285341235623</p>
                </div>
            </div>
            <hr>

            <div class="text-center">
                <a class="btn btn-primary text-white" href="#edit_profil">EDIT PROFIL</a>
            </div>
        </div>
    </section>
    <br><br>

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