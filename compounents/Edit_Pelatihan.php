<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>Edit Pelatihan</title>
		<?php
			error_reporting(E_ALL);
			include 'Connection.php';
			if (isset($_POST['submit']))
			{
				$PostPelatihanID = $_POST['InputPelatihanID'];
				$PostPelatihanRuang = $_POST['InputPelatihanRuang'];
				$PostPelatihanTanggal = $_POST['InputPelatihanTanggal'];
				$PostPelatihanMateri = $_POST['InputPelatihanMateri'];
				$PostPengajarID = $_POST['InputPengajarID'];
				$PostPesertaID = $_POST['InputPesertaID'];

				$strQuery = "UPDATE pelatihan SET
					Pelatihan_Ruang = '{$PostPelatihanRuang}',
					Pelatihan_Tanggal = '{$PostPelatihanTanggal}',
					Pelatihan_Materi = '{$PostPelatihanMateri}',
					Pengajar_ID = '{$PostPengajarID}',
					Peserta_ID = '{$PostPesertaID}'
				WHERE Pelatihan_ID = '{$PostPelatihanID}'";

				$query = mysqli_query($conTraining, $strQuery);
				header('location: List_Pelatihan.php');
			}
			$GetPelatihanID=$_GET['id'];
			$strQuery="SELECT * FROM pelatihan WHERE Pelatihan_ID = '{$GetPelatihanID}'";
			$query=mysqli_query($conTraining, $strQuery);
			if(!$query) die('Error: Data tidak tersedia');
			$data=mysqli_fetch_array($query); 
			function is_select($var, $val) {
				if ($var == $val) return "selected='selected'";
				return false;
			}
		?>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h2>
			Edit Pelatihan
		</h2>
		<form method="post" action="Edit_Pelatihan.php" enctype="multipart/form-data">
			<table class="table center" border="2" cellpadding="5">
				<tr>
					<td>
						<label>
							Ruangan
						</label>
					</td>
					<td>
						<input type="text" name="InputPelatihanRuang" value="<?php echo $data['Pelatihan_Ruang'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Pelatihan
						</label>
					</td>
					<td>
						<input type="date" name="InputPelatihanTanggal" value="<?php echo $data['Pelatihan_Tanggal'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Materi Pelatihan
						</label>
					</td>
					<td>
						<input type="text" name="InputPelatihanMateri" value="<?php echo $data['Pelatihan_Materi'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Instruktur
						</label>
					</td>
					<td>
						<input type="number" name="InputPengajarID" value="<?php echo $data['Pengajar_ID'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Peserta
						</label>
					</td>
					<td>
						<input type="number" name="InputPesertaID" value="<?php echo $data['Peserta_ID'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Save
						</label>
					</td>
					<td>
						<div class="submit">
							<div hidden>
								<input type="number" name="InputPelatihanID" value="<?php echo $GetPelatihanID;?>" />	
							</div>
							<input type="submit" name="submit" value="Submit" />
						</div>
					</td>
				</tr>
			</table>
		</form>
		<?php include '../Footer.php'; ?>
	</body>
</html>