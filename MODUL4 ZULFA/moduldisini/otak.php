<?php
$C0NF1G5 = mysqli_connect("localhost", "root", "", "wad_modul4");

class database{
    var $host = "localhost";
    var $userku = "root";
    var $Passorang = "";
    var $Modulnyaini = "wad_modul4";
    var $C0NF1G10;

    function __construct(){
        $this->C0NF1G10 = mysqli_connect($this->host, $this->userku, $this->Passorang, $this->Modulnyaini);
    }
    function login($yahoo, $Secretlah, $mantan){
        $kukeku = mysqli_query($this->C0NF1G10, "SELECT * FROM users WHERE email='$yahoo'");
        $DATUS = $kukeku->fetch_array();
        if ($DATUS['password']) {
            if ($mantan) {
                setcookie('email', $yahoo, time() + (60*60*24*5), '/');setcookie('nama', $DATUS['nama'], time() + (60*60*24*5), '/');
            }
            $_SESSION['email'] = $yahoo;
            $_SESSION['nama'] = $DATUS['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function register($C0NF1G11, $yahoo, $no_hp, $Secretlah){
        $QUEE = mysqli_query($this->C0NF1G10,"INSERT INTO users VALUES ('','$C0NF1G11','$yahoo','$Secretlah','$no_hp')");return $QUEE;
    }
    function relogin($yahoo){
        $kukeku = mysqli_query($this->C0NF1G10, "SELECT * FROM user WHERE email='$yahoo'");$DATUS = $kukeku->fetch_array();
        $_SESSION['email'] = $yahoo;$_SESSION['nama'] = $DATUS['nama'];$_SESSION['is_login'] = TRUE;
    }
}
?>