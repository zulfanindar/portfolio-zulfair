<!doctype html>
<html lang="en">
<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
<!--- NAVBAR --->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
      <div class="mx-auto d-flex">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
<!---Akhir NAVBAR--->

<div class="title  d-flex justify-content-center text-primary ">
  <center>
      <div class="jumbotron container-fluid text-center py-5" style="background-color:#fffffff"></div>
        <h1 class="display-4" style="color:#506D84;">WELCOME TO ESD VENUE RESERVATION</h1>
      <div class="mt-1 row " style="padding:50px;text-align:justify">
          <div class="mt-1 row " style="padding:7px;text-align:justify;background-color:#515E63;height:50px">
            <center>  <h4 style="color:white  ">Find Your best deal for your event, here !</h4></center>
          </div>
    </div>

  </div>
  </div>

<section class="content">
    <div class="mt-5 row text-start">
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="./assets/images/NusantaraH.jpg" width="275" height="200">
            <div class="card-body">
              <h5 class="card-title">Nusantara Hall</h5>
              <p class="card-text" style="text-align:justify; ">$2000 / Hour<br>5000 Capacity</p>
              <hr>
              <center><p style="color:green; font-size: 15px;font-weight:bold">Free Parking</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Full AC</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p>
                <hr>  <a href="booking.php?room=<?php echo 'Nusantara Hall&img=NusantaraH' ?>"><button type="button" class="btn btn-primary">Book Now</button></a>

              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="./assets/images/GarudaH.jpg" width="275" height="200">
            <div class="card-body">
              <h5 class="card-title">Garuda Hall</h5>
              <p class="card-text" style="text-align:justify; ">$1000 / Hour<br>2000 Capacity</p>
              <hr>
              <center><p style="color:green; font-size: 15px;font-weight:bold">Free Parking</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Full AC</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p><p style="color:green; font-size: 15px;font-weight:bold"><hr>

                <a href="booking.php?room=<?php echo 'Garuda Hall&img=GarudaH' ?>"><button type="button" class="btn btn-primary">Book Now</button></a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="./assets/images/GSG.jpg" width="275" height="200">
            <div class="card-body">
              <h5 class="card-title">Gedung Serba Guna</h5>
              <p class="card-text" style="text-align:justify; ">$500 / Hour<br>500 Capacity</p>
              <hr>
              <center><p style="color:red; font-size: 15px;font-weight:bold">No Free Parking</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Full AC</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p><a href="booking.php?room=<?php echo 'Gedung Serba Guna&img=GSG' ?>"><hr><button type="button" class="btn btn-primary">Book Now</button></a>


              </center>
            </div>
          </div>
        </div>
  
</section>


<!-- Opsi JavaScript -->
<!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<footer class="py-2 text-center">
    <p>
      <i class="text-black fw-bold">Created by: ZULFA_1202194363</a>
    </p>
</footer>
<!-- Akhir Footer -->
</html>