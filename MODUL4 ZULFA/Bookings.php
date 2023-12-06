<?php
include_once('moduldisini/otak.php');
$DBKU= new database();session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}
$datanya = $_SESSION['email'];$ds = "SELECT id FROM users WHERE email = '$datanya'";$usrer = mysqli_query($C0NF1G5,$ds);
$idus=0;
while ($EHkokada = mysqli_fetch_assoc($usrer)) {
    $idus = $EHkokada['id'];
}
$inter = "SELECT * FROM Bookings WHERE user_id = '$idus'";$MYSQLQUERY = mysqli_query($C0NF1G5, $inter);
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
    <title>Bookings</title>
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
                                <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
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

   <center>
     <div class="container my-3">
        <table class="table table-striped" style="height:100px; width: 75%;">
            <thead>
                <tr>
                    <th scope="col">No</th><th scope="col">Nama Tempat</th><th scope="col">Lokasi</th><th scope="col">Tanggal</th><th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
                $i_nya = 0;
                $lah = 0;
                while ($datapokok = mysqli_fetch_assoc($MYSQLQUERY)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<th scope="row">';
                    echo $i_nya+=1;
                    echo '</th>';
                    echo '<td>';
                    echo $datapokok['nama_tempat'];
                    echo '</td>';
                    echo '<td>';
                    echo $datapokok['lokasi'];
                    echo '</td>';
                    echo '<td>';
                    echo $datapokok['tanggal'];
                    echo '</td>';
                    echo '<td>'; 
                    echo 'Rp ' . number_format($datapokok['harga'], 0, ",", ",");
                    $lah = $lah + $datapokok['harga'];
                    echo '</td>';
                            // 
                    echo '<td>'; ?> <!-- POTONG DISINI -->

                    <a href="moduldisini/kenanganmantan.php?name=<?php echo $datapokok['id']; ?>" class="btn btn-danger btn-md" onclick="alert('Item berhasil dihapus')">Hapus</a>

                    <?php echo '</td>'; // SAMBUNG DISINI
                    echo '</tr>';echo '</tbody>';     }
                    echo '<tbody>';
                    echo '<tr>';

                    echo '<th scope="row">';
                    echo 'Total';
                    echo '</th>';


                    echo '<th scope="row">';

                    echo '</th>';


                    echo '<th scope="row">';

                    echo '</th>';


                    echo '<td>';
                    echo '';
                    echo '</td>';
                    echo '<td>';
                    echo '</td>';

                    echo '<td>';
                    echo '<b>';
          

                    echo 'Rp ' . number_format($lah, 0, ",", ",");
          
                    echo '</b>';
          
                    echo '</td>';
          
            ?>
        </table>
   </center>
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
