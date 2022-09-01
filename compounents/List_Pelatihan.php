<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>
			List Pelatihan
		</title>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h1>
			Selamat datang di Page List Pelatihan
		</h1>
		<h3>
			Daftar Pelatihan Sekarang!
		</h3>
		<form name="frmPelatihan" action="Create_Pelatihan.php" method="post">
			<table class="center" border="2" cellpadding="5" bgcolor="white">
				<tr>
					<td>
						<label>
							Ruang
						</label>	
					</td>
					<td>
						<input type="text" name="txtRuang">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal
						</label>
					</td>
					<td>
						<input type="date" name="dtpTanggalPelatihan">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Materi
						</label>
					</td>
					<td>
						<input type="text" name="txtMateri">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Pengajar
						</label>
					</td>
					<td>
						<input type="number" name="txtIDPengajar">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							ID Peserta
						</label>
					</td>
					<td>
						<input type="number" name="txtIDPeserta">
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
		<h2>
			Summary List Pelatihan
		</h2>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM view_pelatihan";
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
					Ruang
				</th>
				<th>
					Tanggal
				</th>
				<th>
					Materi
				</th>
				<th>
					Pengajar
				</th>
				<th>
					Peserta
				</th>
				<th>
					Modify
				</th>
			</tr>
			<?php 
				while ($data=mysqli_fetch_array($query)) {
					// code...
					$PelatihanID=$data["Pelatihan_ID"];
					$PelatihanRuang=$data["Pelatihan_Ruang"];
					$PelatihanTanggal=$data["Pelatihan_Tanggal"];
					$PelatihanMateri=$data["Pelatihan_Materi"];
					$PengajarID=$data["Pengajar_ID"];
					$PesertaID=$data["Peserta_ID"];
				
			 ?>
			<tr>
				<td>
					<?php echo $PelatihanID; ?>
				</td>
				<td>
					<?php echo $PelatihanRuang; ?>
				</td>
				<td>
					<?php echo $PelatihanTanggal; ?>
				</td>
				<td>
					<?php echo $PelatihanMateri; ?>
				</td>
				<td>
					<?php echo $PengajarID; ?>
				</td>
				<td>
					<?php echo $PesertaID; ?>
				</td>
				<td>
					<a href="Edit_Pelatihan.php?id=<?php echo $data['Pelatihan_ID']; ?>">
						Change
					</a>
					or
					<a href="Delete_Pelatihan.php?id=<?php echo $data['Pelatihan_ID']; ?>">
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