<?php
	session_start();
	$server		= "localhost";
	$user 		= "root";
	$password	= "";
	$db_name 	= "db_penjualan" ;

	mysql_connect($server, $user, $password);
	mysql_select_db($db_name) or die("Koneksi ke database GAGAL");
	echo "Koneksi ke database BERHASIL";
?>