<?php
include_once('moduldisini/otak.php');
$db = new database();session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}
$apalahtau = $_SESSION['email'];$Masukindungom = "SELECT id FROM users WHERE email = '$apalahtau'";$Usr_ID = mysqli_query($C0NF1G5,$Masukindungom);$id_usr2=0;
while ($Usr_ids = mysqli_fetch_assoc($Usr_ID)) {
    $id_usr2 = $Usr_ids['id'];
}
if(isset($_POST['kota1'])){
    $datenya=date('Y-m-d H:i:s', strtotime($_POST['item_date']));$Masukindungom = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_usr2', 'Kota Lama', 'Semarang Tawang', '550000', '$datenya')";
    $masukindata = mysqli_query($C0NF1G5, $Masukindungom);
    if ($masukindata) {
            header("Refresh:1");            
            echo '<div class="alert alert-info" role="alert">';
            echo 'Berhasil! Berhasil hore! Selamat sudah berhasil menambahkan destinasi wisata.';            
            echo '</div>';
    }
    else{
            header("Refresh:1");            
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Ups! Tidak bisa menambahkan, coba lagi ya. Yuk bisa yuk!';            
            echo '</div>';
    }
}
if(isset($_POST['kota2'])){
    $datenya=date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $Masukindungom = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_usr2', 'Benteng Pandem', 'Ambarawa', '350000', '$datenya')";
    $masukindata = mysqli_query($C0NF1G5, $Masukindungom);
    if ($masukindata) {
      header("Refresh:1");            
      echo '<div class="alert alert-info" role="alert">';
      echo 'Mantap, udah pesen tiket';            
      echo '</div>';
}
else{
      header("Refresh:1");            
      echo '<div class="alert alert-danger" role="alert">';
      echo 'Ga bisa nambahin';            
      echo '</div>';
}
}
if(isset($_POST['kota3'])){
    $datenya=date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $Masukindungom = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_usr2', 'Sam poo kong', 'Semarang Tawang', '450000', '$datenya')";
    $masukindata = mysqli_query($C0NF1G5, $Masukindungom);
    if ($masukindata) {
      header("Refresh:1");            
      echo '<div class="alert alert-info" role="alert">';
      echo 'Mantap, udah pesen tiket';            
      echo '</div>';
}
else{
      header("Refresh:1");            
      echo '<div class="alert alert-danger" role="alert">';
      echo 'Ga bisa nambahin';            
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
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    </head>
    <body style="background-color:#FFDAB9">

    <!--- Awal Navbar --->
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
                            <a class="dropdown-item" href="profile.php">Profile</a>
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
  
  
    <div class="container mt-5" style="padding-left:75px">
        <div class="card mx-5 border-0" style="width:90%;background-color: #FFDAB9">
            <div class="border rounded">
                <br>
                <h1 class="mt-3" align="center">EAD TRAVEL</h1>
                <p></p>

                <br>
            </div>
            <form method="post" action="">

                <div class="card-body pt-0 px-3">
                    <div class="row border rounded">
                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/pantai-indrayanti-ii.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Pantai Indrayanti, Yogyakarta</h5>
                                <p class="card-text">Terletak di sebelah timur Pantai Sundak, pantai yang dibatasi bukit karang ini merupakan salah satu pantai yang menyajikan pemandangan berbeda dibandingkan pantai-pantai lain yang ada di Gunungkidul. Tidak hanya berhiaskan pasir putih, bukit karang, dan air biru jernih yang seolah memanggil-manggil wisatawan untuk menceburkan diri ke dalamnya, Pantai Indrayanti juga dilengkapi restoran dan cafe serta deretan penginapan yang akan memanjakan wisatawan. </p>
                                <hr>
                                <p><b>Rp20.000</b></p>
                            </div>
                        </div>

                        <div class="col card border-top-0 border-bottom-0 px-0">
                            <img class="card-img-top" src="https://asset.kompas.com/crops/t4BQfwtBLUJuCtHKFrFkrYqr6aQ=/87x0:1035x632/750x500/data/photo/2021/10/26/6178142e88b0f.png" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Pantai Pasir Putih PIK 2, Jakarta</h5>
                                <p class="card-text">
                                <p class="card-text">Pantai Pasir Putih PIK 2 telah menjadi perbincangan banyak wisatawan sejak dibuka kembali untuk umum sekitar tahun 2020. Pantai dengan pasir putih buatan ini telah menjadi ikon tersendiri di sepanjang pantai tujuan wisata, sehingga membuat pengunjung penasaran. Anda juga bisa menyantap berbagai makanan, terutama makanan laut, serta menikmati suasana pantai yang indah. Keindahan pantai bisa disantap dengan santai.</p>
                                 <hr>
                                 <p><b>Rp50.000</b></p>
                            </div>
                        </div>

                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="https://www.gotravelly.com/assets/img/review/gallery/1328/214d75a0c76ab34ab45b18ded6cd01fe.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Sunrise Point Cukul, Bandung</h5>
                                <p class="card-text">
                                <p class="card-text">Sunrise Point Cukul menjadi destinasi wisata rekomended di Bandung yang bisa anda kunjungi ketika berlibur bersama orang tercinta. Mengingat nama destinasi wisata sunrise point cukul membuat kesan dari wisata alam ini hanya preoperational pada fajar. Pada nyatanya, sunrise point yang ada di Cukul ini tidak hanya beroperasi pada fajar semata. Destinasi wisata ini justru mempunyai waktu operasional yang cukup lama, bahkan sangat recommended sebagai destinasi wisata 24 jam non stop.</p>
                                 <hr>
                                 <p><b>Rp450.000</b></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row border rounded" align="center">
                        <div class="col card border-0">
                            <button type="button" class="btn btn-outline-dark btn-sm my-3" data-target="#modal1" data-toggle="modal" style="width:100%">Pesan Tiket</button>
                        </div>
                        <div class="col card border-top-0 border-bottom-0">
                            <button type="button" class="btn btn-outline-dark btn-sm my-3" data-target="#modal2" data-toggle="modal"style="width:100%">Pesan Tiket</button>
                        </div>
                        <div class="col card border-0">
                            <button type="button" class="btn btn-outline-dark btn-sm my-3" data-target="#modal3" data-toggle="modal" style="width:100%">Pesan Tiket</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                    <div class="modal fade" id="modal1" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

        <form action="" method="post">

            <input type="text" class="form-control" name="item_date" data-toggle="datepicker"readonly="true">
          </div>
          <div class="modal-footer">
            
           <button type="submit" name="kota1" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>


   
   
    <div class="modal fade" id="modal2" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        <form action="" method="post">




            <input type="text" class="form-control" name="item_date" data-toggle="datepicker" readonly="true">
          </div>
          <div class="modal-footer">

            <button type="submit" name="kota2" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>


          <div class="modal fade" id="modal3" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"readonly="true">
                    <span aria-hidden="true">&times;</span>
                  </button>




          </div>
          <div class="modal-body">
                     <form action="" method="post">

            <input type="text" class="form-control" name="item_date" data-toggle="datepicker">
          </div>
          <div class="modal-footer">
 
            <button type="submit" name="kota3" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
        </form>
          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <script src="js/datepicker.js"></script>
  <script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
  </script>

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
            <a class="text-dark" data-toggle="modal" data-target="#exampleModal">ZULFA_1202194363

</a>
          </div>
          <!-- Copyright -->
</footer>

<!-- Akhir Footer -->



</html>