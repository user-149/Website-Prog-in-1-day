<?php 
	include "Connection.php";
	$CrtPelatihanRuang = $_POST['txtRuang'];
	$CrtPelatihanTanggal = $_POST['dtpTanggalPelatihan'];
	$CrtPelatihanMateri = $_POST['txtMateri'];
	$CrtPengajarID = $_POST['txtIDPengajar'];
	$CrtPesertaID = $_POST['txtIDPeserta'];
	$strQuery="INSERT INTO pelatihan(Pelatihan_Ruang,Pelatihan_Tanggal,Pelatihan_Materi,Pengajar_ID,Peserta_ID) VALUES ('$CrtPelatihanRuang','$CrtPelatihanTanggal','$CrtPelatihanMateri','$CrtPengajarID','$CrtPesertaID' );";
	// proses query;
	$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
	if ($query) {
		// Your code is a succes...
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
?>