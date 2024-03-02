<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_kontak';
	$conn = mysqli_connect($host, $user, $pass, $db);
	if($conn){
		// echo "Koneksi Berhasil";

	}

    mysqli_select_db($conn, $db);
?>
