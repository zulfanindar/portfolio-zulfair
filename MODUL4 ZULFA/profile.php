<?php
include_once('moduldisini/otak.php');
$DB = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

$mantanku = $_SESSION['email'];
$perintah = "SELECT * FROM users WHERE email = '$mantanku'";
$yak = mysqli_query($C0NF1G5,$perintah);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];$Gmail = $_POST['email'];
    $nohp = $_POST['no_hp'];$paws = $_POST['password'];
    if ($_POST['confirm_password'] == $_POST['password']){
        try {
            $DATASKU = "UPDATE users SET nama='$nama', email='$Gmail', No_hp='$nohp', password='$paws' WHERE email='$Gmail'";
            $sswqw = $C0NF1G5->prepare($DATASKU);
            $sswqw->execute();
            header('Refresh:2');echo '<div class="alert alert-Success" role="alert">';
            echo 'Berhasil di update!';
            echo '</div>';
        } catch (PDOException $e) {
            echo $DATASKU . "<br>" . $e->getMessage();
        }
        $C0NF1G5 = null;
    }
    else{
            header('Refresh:2');
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal di update!';
            echo '</div>';
    }
    }
else{
    if(isset($_POST['cancel'])){
        header('location: index.php');
    }
}
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active mr-3">
                                        <a class="nav-link" href="Bookings.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                                    </li>
                                    <li class="nav-item active mr-3">



                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat Datang, <font class="text-primary"><?php echo $_SESSION['nama']?></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="moduldisini/kick.php">Log Out</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


    </nav>
<!--- akhir navbar --->

    <div class="container my-3">
        <div class="card centered mx-auto" style="width: 100%;">
            <div class="card-body" style="background-color:#FFDAB9">
                <h2 class="card-title" align="center">Profile</h2>
                <form method="post" action="">
                    <?php
                        while ($DATASKU = mysqli_fetch_assoc($yak)) {
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" name="email" value="<?php echo $DATASKU['email'] ?>" readonly>
                            </div>
                        </div>
                       
                       
                       
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $DATASKU['nama'] ?>">
                            </div>
                        </div>
                       
                       
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_hp" value="<?php echo $DATASKU['No_hp'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                       
                       
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                            <button type="submit" class="btn btn-secondary btn-block" name="cancel">Cancel</button>
                        </div>
                    <?php } ?>
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