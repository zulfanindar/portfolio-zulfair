<?php
include_once('moduldisini/otak.php');
$R6G1ST6R1 = new database();
if (isset($_POST['register'])) {
    $yourname = $_POST['nama'];
    $yahoo = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $kepolu = ($_POST['password']);

    if ($_POST['konfirmasi_password'] == $_POST['password']) {
        if ($R6G1ST6R1->register($yourname,$yahoo,$no_hp,$kepolu)) {
            header("Refresh:2; url=login.php");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil! Berhasil hore! Selamat anda sudah berhasil registrasi';
            echo '</div>';
        }
    }
    else {
        header("Refresh:2");
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Ups! Gagal registrasi';
        echo '<br>';
        echo 'Periksa kembali password anda';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="background-color:#FFDAB9"> 

<!--- awal navbar --->
     <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top" style="background-color:#E8F6EF">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <a class="nav-link text-light" href="Login.php"> <button type="button" class="btn btn-outline-warning"><span>LOG IN</span></button></a>
     <a class="nav-link disable text-light" href="#"> <button type="button" class="btn btn-outline-warning"><span>REGISTER</span></button></a>
      <li class="nav-item dropdown">
    
      </li>   
    </div>
  </div>

    </nav>
<!--- AKhir Navbar--->

    <div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 60rem; height: 40rem; ">
            <div class="card-body">
                <h5 class="card-title" align="center">Registrasi</h5>
                <hr></hr>
                <form method="post" action="">
                   
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:100%" placeholder="Masukkan Nama Lengkap">
                    </div>
                  
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:100%" placeholder="Masukkan Alamat E-mail">
                    </div>
                  
                    <div class="form-group ml-3">
                        <label>No. Handphone</label>
                        <input type="number" class="form-control" name="no_hp" style="width:100%" placeholder="Masukkan Nomor Handphone">
                    </div>
                  
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:100%" placeholder="Buat Kata Sandi">
                    </div>
                  
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="konfirmasi_password" style="width:100%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                  
                  
                  
                    <div class="form-group ml-3" align="center">
                 
                        <button type="submit" name="register" class="btn btn-outline-success mb-2 btn-block">Daftar</button>
                        <br>
                        Sudah punya akun? Silahkan<a href="login.php">Login</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

</body>
<!-- Footer -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">



                  
                    <h5 class="modal-title" id="exampleModalLabel">Created By </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <p>Nama = ZULFA IRFANINDA RAMADHANTI</p><p>NIM  = 1202194363



</p>
                  </div>
                 
                </div>
              </div>
            </div>
        <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="d-flex d-flex justify-content-center align-items-center text-center p-3" style="background-color:#E8F6EF;">
            © 2021 Copyright:
            <a class="text-dark" data-toggle="modal" data-target="#exampleModal"> ZULFA_1202194363

</a>
          </div>
          <!-- Copyright -->
</footer>

<!-- Akhir Footer -->
</html>