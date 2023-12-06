<!doctype html>
<html lang="en">
<head>
    <title>Booking</title>
    <script src="./assets/js/script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/styles/styles.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <p class="lead" style="padding:7px; background-color:black; color:whitesmoke; weight:30px">Reserve your venue now!</p>
</center>

    <div class="main">
        <div class="row content">

            <div class="col-sm-6 kiri">
                <div class="container">
                    <div class="img-card">
                        <?php
                        if (empty($_GET['img'])) {
                            echo '<img class="img-fluid roomPreview prev" src="./assets/images/NusantaraH.jpg" alt="Pr">';
                        } else {
                            echo '<img class="img-fluid roomPreview prev" src="./assets/images/' . $_GET['img'] . '" alt="Tidak Tersedia">';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 kanan px-2">
                <div class="p-5">
                    <form method="POST" action="My_Booking.php">
                        <div class="form-group">
                            <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Anda" name="nama" value="ZULFA_1202194363" required readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inDate" class="col-sm-3 col-form-label">Event Date</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="inputDate" placeholder="dd/mm/yyyy" name="inputDate" value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTime" class="col-sm-3 col-form-label">Start Time</label>
                            <div class="col-sm-12">
                                <input required name="time" placeholder="--:--" class="form-control" type="time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDuration" class="col-sm-3 col-form-label">Duration(Hours)</label>
                            <div class="col-sm-12">
                                <input required name="duration" placeholder="Duration" class="form-control" type="number" min="1" aria-describedby="days">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Building Type</label>
                            <div class="col-sm-12">
                                <?php
                                if (empty($_GET['room'])) {
                                    echo '
                                <select name="build" class="form-control" id="build" onchange="change_image()">
                                    <option id="1" value="Nusantara Hall">
                                        Nusantara Hall</option>
                                    <option id="2" value="Garuda Hall">
                                        Garuda Hall</option>
                                    <option id="3" value="Gedung Serba Guna">
                                        Gedung Serba Guna</option>
                                </select>';
                                } else {
                                    $roomType = $_GET['room'];
                                    $stat = is_null($roomType);
                                    if ($stat != 1) {
                                        echo '
                                        
                                <input readonly name="build" type="text" class="form-control disabled"  id="build"  value="' . $roomType . '" required>';
                                    } else {
                                        echo '    <div class="col-sm-12">
                                <select name="build" class="form-control" id="build" onchange="change_image()">
                                    <option id="1" value="Nusantara Hall">
                                        Nusantara Hall</option>
                                    <option id="2" value="Garuda Hall">
                                        Garuda Hall</option>
                                    <option id="3" value="Gedung Serba Guna">
                                        Gedung Serba Guna</option>
                                </select>
                            </div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label">Phone Number :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Nomor Telepon" name="inputPhone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Add Service(s)</label>
                            <div class="col-sm-12">
                                <input type="checkbox" name="services[]" value="Catering"> Catering/$700 <br>
                                <input type="checkbox" name="services[]" value="Decoration"> Decoration/$450 <br>
                                <input type="checkbox" name="services[]" value="Sound System"> Sound System/$250 <br>
                                </fieldset>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" id="btn-submit" class="btn btn-primary btn-block">Book</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

<!-- Footer -->
<footer class="py-2 text-center">
    <p>
      <i class="text-black fw-bold">Created by: ZULFA_1202194363</a>
    </p>
</footer>
<!-- Akhir Footer -->

</html>