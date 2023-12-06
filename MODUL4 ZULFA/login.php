<?php
session_start();include_once('moduldisini/otak.php');$DABESKU = new database();
if (isset($_SESSION['is_login'])) {header('location:index.php');
}
if (isset($_COOKIE['email'])) {$DABESKU->relogin($_COOKIE['email']);header('location:index.php');
}
if (isset($_POST['login'])) {
    $Yahoo = $_POST['email'];
    $gausahkepo = $_POST['password'];
    if (isset($_POST['remember'])) {$haha = TRUE;    }
    else {$haha = FALSE; }

    if ($DABESKU->login($Yahoo,$gausahkepo,$haha)) {
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">';
        echo '<strong>Selamat Datang di EAD TRAVEL </strong>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
        header("Refresh:3; url=index.php");
    }else{
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        echo '<strong>Login Gagal! Cek email atau password. Yuk bisa yuk</strong>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
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
    <style>
        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>

<body style="background-color:#FFDAB9"> 
<!--- Awal navbar --->
    <nav class="navbar navbar-expand-lg" style="background-color:#E8F6EF">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <div class="nav navbar-right">
     <a class="nav-link disable text-light" href="Login.php"> <button type="button" class="btn btn-outline-warning"><span>LOG IN</span></button></a>
     <a class="nav-link text-light" href="register.php"> <button type="button" class="btn btn-outline-warning"><span>REGISTER</span></button></a>
      <li class="nav-item dropdown">
    
      </li>   
    </div>

        </div>
    </nav>
    <!--- Akhir Navbar --->

     <div class="container d-flex justify-content-center" style="height: 100%;">
        <div class=" login ">
            <div class="card w-100 h-100">
                <div class="card-body">
                <h5 class="card-title" align="center">Login</h5>
                <hr></hr>
                
                
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:100%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:100%" placeholder="Buat Kata Sandi">
                    </div>
                  
                  
                    <div class="form-check ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                   
                   
                   
                    <div class="form-group mt-5" align="center">
                        <button type="submit" name="login" class="btn btn-primary btn-block mb-2">Login</button>
                        <br>
                        Belum punya akun? Silahkan <a href="register.php">Registrasi</a>
                    </div>
                </form>

                </div>
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