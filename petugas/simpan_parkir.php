<?php 
function tambah($data){
	global $config;
	ini_set('date.timezone', 'Asia/Jakarta');
	$waktu_masuk = date("Y-m-d H:i:s");
	$jenis_id = $data["jenis_kendaraan"];
	$nomor_polisi = $data["nomor_polisi"];
	$tempat_parkir = $data['tempat_parkir'];
	$keterangan = 'Masuk';
	$query = "INSERT INTO kendaraan VALUES ('','$jenis_id','$nomor_polisi','$tempat_parkir','$waktu_masuk','','','$keterangan')";
		mysqli_query($config, $query);
}

 ?>