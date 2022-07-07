<?php
include_once("../config/helper.php");
include_once("../config/config.php");
include_once '../config/function.php';

if( isset($_GET['user_id']) ){

    // ambil id dari query string
    $user_id = $_GET['user_id'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE user_id=$user_id";
    $query = mysqli_query($config, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php?page=data_owner');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>