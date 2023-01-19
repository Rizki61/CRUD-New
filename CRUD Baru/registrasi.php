<?php 
require 'funcitons.php';
// tombol di submit
if( isset($_POST["register"])) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>alert('user baru ditambahkan');</script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <!-- goole font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Input Form -->
<div class="container">
<h1>Halaman Registrasi</h1>
<form action="" method="post">
    <!-- inserts username -->
<div class="txt-field">
    <label for="username">Masukan Nama</label>
    <span></span>
    <input type="text" name="username" id="username">
</div>
<div class="txt-field">
    <!-- insert password -->
    <label for="password">Masukan Sandi</label>
    <span></span>
    <input type="password" name="password" id="password">
</div>
<div class="txt-field">
    <!-- insert verifikasi password -->
    <label for="password2">Konfirmasi Sandi</label>
    <span></span>
    <input type="password" name="password2" id="password2">
    <!-- Tombol Register -->
</div>
    <button type="submit" name="register">Buat Akun</button>
    <!-- Blum Mempunyai Akun -->
    <div class="sign-up">
        Sudah Mempunyai Akun ? <a href="login.php">Masuk</a>
    </div>
</form>
</div>

</body>
</html>