<?php
$config=mysqli_connect("localhost","root","","dbparkir");

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal". mysqli_connect_errno();    
}
?>