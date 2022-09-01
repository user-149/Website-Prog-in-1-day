<?php
	include 'Connection.php';
	// prepare query;
	$CrtPesertaName = $_POST['txtNama'];
	$CrtPesertaBirthDay = $_POST['dtpTanggalLahir'];
	$CrtPesertaUsia = $_POST['txtUsia'];
	$CrtPesertaKelamin = ($_POST['opgkelamin'] == "Pria") ? "Pria" : "Wanita";
	$CrtPesertaStatus = (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE ;
	// membuat query;
	$strQuery="INSERT INTO peserta(Peserta_Name,Peserta_BirthDay,Peserta_Usia,Peserta_Kelamin,Peserta_Status) VALUES ('$CrtPesertaName','$CrtPesertaBirthDay','$CrtPesertaUsia','$CrtPesertaKelamin','$CrtPesertaStatus' );";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
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