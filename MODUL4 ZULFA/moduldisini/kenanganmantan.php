<?php
    include_once('otak.php');$sql = "DELETE FROM Bookings WHERE id='" . $_GET['name'] . "'";if (mysqli_query($C0NF1G5, $sql)) {echo "Record deleted successfully";header('location:../Bookings.php');
    }else {echo "Error";}mysqli_close($C0NF1G5);
?>