<?php
	include 'Connection.php';
	// prepare query;
	// $id = $_POST['txtID'];
	$DelPesertaID = $_GET['id'];
	$strQuery="DELETE FROM peserta WHERE Peserta_ID = '$DelPesertaID'";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
		mysqli_close($conTraining); // Close connection
		echo "
			Task Failed Succesfully! JK
			<meta http-equiv='refresh' content='1, url=List_Peserta.php'>
		";
	} else {
		// you are a failure just like my son!
		echo "
			You are a Failure just like my son
			<meta http-equiv='refresh' content='1 url=List_Peserta.php'>
		";
	}
	// fetching data;

 ?>