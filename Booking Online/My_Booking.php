
<!doctype html>
<html lang="en">
<head>
    <title>My Booking</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .row {
            display: flex;

        }
    </style>
</head>

<body>

<!--- NAVBAR --->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
      <div class="mx-auto d-flex">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Booking.php">Booking</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
<!---Akhir NAVBAR--->

<center>
    <div class="jumbotron container-fluid text-center py-5" style="padding:15px; background-color:white;"></div>
    <p class="lead" style="color:black;">Thankyou ZULFA_1202194363 for reserving!</p>
    <p class="lead" style="color:grey;">Please double check your reservation details!</p>
</center>


    <div>
        <div class="container-fluid d-flex justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Building Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php
                        error_reporting(0);
                        ini_set('display_errors', 0);
                        $nama = $_POST['nama'];
                        $tipegedung = $_POST['build'];
                        $nomortelepon = $_POST['inputPhone'];
                        $waktu =$_POST['time'];
                        $lama = $_POST['duration'];
                        $hargagedung = 0;
                        $tanggalbook = date('d/m/Y', strtotime($_POST['inputDate']));
                        $cekout = date('d/m/y', strtotime("+$lama hours", strtotime($_POST['inputDate'])));
                        switch ($tipegedung) {
                            case 'Nusantara Hall':
                                $harga = 2000;
                                break;
                            case 'Garuda Hall':
                                $harga = 1000;
                                break;
                            case 'Gedung Serba Guna':
                                $harga = 500;
                                break;
                        }

                        $serviceFee = 0;

                        if (empty($_POST['services'])) {
                            $reservedServices = 0;
                        } else {
                            $reservedServices = $_POST['services'];
                            // $serviceFee = count($reservedServices) * 20;
                        }

                        if(in_array('Catering', $_POST['services'])){
                            $serviceFee = $serviceFee+ 700;
                          }
                        if(in_array('Decoration', $_POST['services'])){
                            $serviceFee = $serviceFee+ 450;
                          }
                        if(in_array('Sound System', $_POST['services'])){
                            $serviceFee = $serviceFee+ 250;
                          }


                        $totalPrice = ($lama * $harga) + $serviceFee;
                        // $hasilku = strtotime("+$lama hours", strtotime($_POST['start']));
                        // $hasilku = $waktu +$lama;

                        echo '
                    <td><strong>'  . rand() . '</strong></td>
                    <td>' . $nama . '</td>
                    <td>' . $tanggalbook . '&nbsp;'.$waktu.'</td>
                    <td>' . $cekout  . '</td>
                    <td>' . $tipegedung . '</td>
                    <td>' . $_POST['inputPhone'] . '</td> 
                    <td><ul>';
                        if ($reservedServices == 0) {
                            echo 'NO SERVICES'; # 
                        } else {
                            for ($i = 0; $i < count($reservedServices); $i++) {
                                echo '<li>' . $reservedServices[$i] . '</li>';
                            }
                        }

                        echo '</ul></td>
                    <td> $' . $totalPrice . '</td>
                    '
                        ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

<!-- Footer -->
<footer class="py-2 text-center">
    <p>
      <i class="text-black fw-bold">Created by: ZULFA_1202194363</a>
    </p>
</footer>
<!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>