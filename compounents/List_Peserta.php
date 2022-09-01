<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>
			List Peserta
		</title>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h1>
			Selamat datang di Page List Peserta
		</h1>
		<h3>
			Daftar Sebagai Peserta Sekarang!
		</h3>
		<form name="frmPeserta" action="Create_Peserta.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<td>
						<label>
							Nama
						</label>	
					</td>
					<td>
						<input type="text" name="txtNama">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Lahir
						</label>
					</td>
					<td>
						<input type="date" name="dtpTanggalLahir">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Usia
						</label>
					</td>
					<td>
						<input type="number" name="txtUsia">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Kelamin
						</label>
					</td>
					<td>
						<input type="radio" name="opgkelamin" value="Pria">Pria
						<input type="radio" name="opgkelamin" value="Wanita" checked>Wanita
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Menikah
						</label>
					</td>
					<td>
						<input type="checkbox" name="chkIsMenikah" checked="true">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Selesai!
						</label>
					</td>
					<td>
						<input type="submit" name="cmdSubmit" onclick="">
					</td>
				</tr>
			</table>
		</form>
		<h3>
			Unsubscribe dari pelatihan? silahkan masukkan ID anda
		</h3>
		<form name="frmPeserta1" action="Delete_Peserta.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<th>
						<label for="id">
							masukkan ID anda
						</label>
					</th>
					<th>
						<input type="number" name="txtID" id="id">
					</th>
					<th>
						<button name="cmdDelete" onclick="">
							Delete
						</button>
					</th>
				</tr>
			</table>
		</form>
		<h2>
			Summary List Peserta
		</h2>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM peserta;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
		 ?>
		<table class="table center" border="2" cellpadding="5">
			<tr>
				<th>
					ID
				</th>
				<th>
					Nama
				</th>
				<th>
					Lahir
				</th>
				<th>
					Usia
				</th>
				<th>
					Kelamin
				</th>
				<th>
					Status
				</th>
				<th>
					Modify
				</th>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$PesertaID=$data["Peserta_ID"];
					$PesertaName=$data["Peserta_Name"];
					$PesertaBirthDay=$data["Peserta_BirthDay"];
					$PesertaUsia=$data["Peserta_Usia"];
					$PesertaKelamin=$data["Peserta_Kelamin"];
					$PesertaStatus =$data["Peserta_Status"];
				
			 ?>
			<tr>
				<td>
					<?php echo $PesertaID; ?>
				</td>
				<td>
					<?php echo $PesertaName; ?>
				</td>
				<td>
					<?php echo $PesertaBirthDay; ?>
				</td>
				<td>
					<?php echo $PesertaUsia; ?>
				</td>
				<td>
					<?php echo $PesertaKelamin; ?>
				</td>
				<td>
					<?php echo ($PesertaStatus==1) ? "Sudah Taken" : "Jomblo Menahun"; ?>
				</td>
				<td>
					<a href="Edit_Peserta.php?id=<?php echo $data['Peserta_ID']; ?>">
						Change
					</a>
					or
					<a href="Delete_Peserta.php?id=<?php echo $data['Peserta_ID']; ?>">
						Delete
					</a>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
		<?php include '../Footer.php'; ?>
	</body>
</html>