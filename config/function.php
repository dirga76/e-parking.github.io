<?php 
include_once 'config.php';
function query($query){
	global $config;
	$result= mysqli_query($config, $query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
 }

 ?>