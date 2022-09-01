<?php
	include 'Connection.php';
	// prepare query;
	$CrtPengajarName = $_POST['txtNama'];
	$CrtPengajarBirthDay = $_POST['dtpTanggalLahir'];
	$CrtPengajarUsia = $_POST['txtUsia'];
	$CrtPengajarKelamin = ($_POST['opgkelamin'] == "Pria") ? "Pria" : "Wanita";
	$CrtPengajarStatus = (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE ;
	// membuat query;
	$strQuery="INSERT INTO pengajar(Pengajar_Name,Pengajar_BirthDay,Pengajar_Usia,Pengajar_Kelamin,Pengajar_Status) VALUES ('$CrtPengajarName','$CrtPengajarBirthDay','$CrtPengajarUsia','$CrtPengajarKelamin','$CrtPengajarStatus' );";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
		echo "
			Task Failed Succesfully! JK
			<meta http-equiv='refresh' content='1, url=List_Pengajar.php'>
		";
	} else {
		// you are a failure just like my son!
		echo "
			You are a Failure just like my son
			<meta http-equiv='refresh' content='1 url=List_Pengajar.php'>
		";
	}
	// fetching data;

 ?>