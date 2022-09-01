<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>Edit Pengajar</title>
		<?php
			error_reporting(E_ALL);
			include 'Connection.php';
			if (isset($_POST['submit']))
			{
				$PostPengajarID = $_POST['InputPengajarID'];
				$PostPengajarName = $_POST['InputPengajarName'];
				$PostPengajarBirthDay = $_POST['InputPengajarBirthDay'];
				$PostPengajarUsia = $_POST['InputPengajarUsia'];
				$PostPengajarKelamin = $_POST['InputPengajarKelamin'];
				$PostPengajarStatus = (isset($_POST['InputPengajarStatus']));

				$strQuery = "UPDATE pengajar SET
					Pengajar_Name = '{$PostPengajarName}',
					Pengajar_BirthDay = '{$PostPengajarBirthDay}',
					Pengajar_Usia = '{$PostPengajarUsia}',
					Pengajar_Kelamin = '{$PostPengajarKelamin}',
					Pengajar_Status = '{$PostPengajarStatus}'
				WHERE Pengajar_ID = '{$PostPengajarID}'";

				$query = mysqli_query($conTraining, $strQuery);
				header('location: List_Pengajar.php');
			}
			$GetPengajarID=$_GET['id'];
			$strQuery="SELECT * FROM pengajar WHERE Pengajar_ID = '{$GetPengajarID}'";
			$query=mysqli_query($conTraining, $strQuery);
			if(!$query) die('Error: Data tidak tersedia');
			$data=mysqli_fetch_array($query); 
			$GetPengajarName=$data['Pengajar_Name'];
			$GetPengajarBirthDay = $data['Pengajar_BirthDay'];
			$GetPengajarUsia = $data['Pengajar_Usia'];
			$GetPengajarKelamin = $data['Pengajar_Kelamin'];
			$GetPengajarStatus = (isset($data['Pengajar_Status']));
			function is_select($var, $val) {
				if ($var == $val) return "selected='selected'";
				return false;
			}
		?>
	</head>
	<body>
		<?php include 'Header1.php'; ?>
		<br>
		<br>
		<h2>
			Edit Pengajar
		</h2>
		<form method="post" action="Edit_Pengajar.php" enctype="multipart/form-data">
			<table class="table center" border="2" cellpadding="5">
				<tr>
					<td>
						<label>
							Nama
						</label>
					</td>
					<td>
						<input type="text" name="InputPengajarName" value="<?php echo $GetPengajarName;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Tanggal Lahir
						</label>
					</td>
					<td>
						<input type="date" name="InputPengajarBirthDay" value="<?php echo $GetPengajarBirthDay;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Usia
						</label>
					</td>
					<td>
						<input type="Number" name="InputPengajarUsia" value="<?php echo $GetPengajarUsia;?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Jenis Kelamin
						</label>
					</td>
					<td>
						<input type="radio" name="InputPengajarKelamin" value="Pria"
						<?php if ($GetPengajarKelamin == 'Pria') : ?>
							checked="checked"
						<?php endif ?>>Pria<br>
						<input type="radio" name="InputPengajarKelamin" value="Wanita"
						<?php if ($GetPengajarKelamin == 'Wanita') : ?>
							checked="checked"
						<?php endif ?>>Wanita<br>
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Status Pernikahan
						</label>
					</td>
					<td>
						<input type="checkbox" name="InputPengajarStatus" checked="<?php echo $GetPengajarStatus;?>">
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
								<input type="number" name="InputPengajarID" value="<?php echo $GetPengajarID;?>" />	
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