<?php
	include 'Connection.php';
	// prepare query;
	// $id = $_POST['txtID'];
	$DelPelatihanID = $_GET['id'];
	$strQuery="DELETE FROM pelatihan WHERE Pelatihan_ID = '$DelPelatihanID'";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
		mysqli_close($conTraining); // Close connection
		echo "
			Task Failed Succesfully! JK
			<meta http-equiv='refresh' content='1, url=List_Pelatihan.php'>
		";
	} else {
		// you are a failure just like my son!
		echo "
			You are a Failure just like my son
			<meta http-equiv='refresh' content='1 url=List_Pelatihan.php'>
		";
	}
	// fetching data;

 ?>