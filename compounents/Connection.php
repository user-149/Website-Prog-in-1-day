<?php
	// deklarasi informasi server;
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="db_training";
	// string koneksi;
	$conTraining=mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	return $conTraining;
	if ($conTraining->connect_error) {
		die("Connection failed: " . $conTraining->connect_error);
	}
 ?>