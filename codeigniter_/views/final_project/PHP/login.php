<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background{
            background: url(/final_project/Pemesanan_Tiket_Bus/bromo2.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>

</head>
<body  class="background">
    
    <div class="mt-5">
        <div class="container bg-dark text-light p-5 bg-opacity-75" style="width: 500px;">
            <div class="form-group pt-0 mt-3">
                <h1 class="text-center mb-5">LOGIN</h1>
            </div>
            <?php echo form_open('Home/userLogin') ?>
            <div class="form-group p-3 m-3">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Masukkan Email..."> 
            </div>
            <div class="form-group p-3 mx-3">
                <label for="inputPass">Password</label>
                <input type="text" class="form-control" id="inputPass" name="inputPass" placeholder="Masukkan Password...">
            </div>
            <div class="text-end mx-5 mb-4">
                <a class="text-decoration-none text-light" href="#">forgot password?</a>
            </div>
            <div class="text-center">
                <button class="btn btn-primary my-2 px-4">Login</button>
            </div>
            <div>
                <p class="text-center">Belum punya akun? <a class="text-decoration-none text-light" href="<?php form_open('Home/index') ?>">Daftar Sekarang</a></p>
            </div>
        </div>
    </div>
</body>
</html>