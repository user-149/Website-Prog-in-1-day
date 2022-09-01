<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>
			Report Pelatihan
			<!-- pls note that the data here is from the set inoute before. -->
			<!-- if you input other type of data outside the set data, -->
			<!-- it will not gonna show up in the page. -->
		</title>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h4 align="center">
			Berikut Ratio jumlah peserta yang berdasarkan pelatihan yang diambil
		</h4>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM pelatihan;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
			$Training1 = 0;
			$Training2 = 0;
			$Training3 = 0;
			$Training4 = 0;
			while ($data=mysqli_fetch_array($query)) {
				// code...
				if ($Materi=$data["Pelatihan_Materi"] == "Edukasi HTML") {
					// code...
					$Training1=$Training1+1;
				} elseif ($Materi=$data["Pelatihan_Materi"] == "Edukasi PHP") {
					// code...
					$Training2=$Training2+1;
				} elseif ($Materi=$data["Pelatihan_Materi"] == "Edukasi Stand") {
					// code...
					$Training3=$Training3+1;
				} elseif ($Materi=$data["Pelatihan_Materi"] == "Edukasi VRMMO") {
					// code...
					$Training4=$Training4+1;
				} else {
				}
			}
		?>
		<div class="container center2">
			<div id="myProgress">
				<label>
					Total Peserta Training Edukasi HTML : <?php echo $Training1; ?>
				</label>
				<div id="TrainBar1">
					1%
				</div>
			</div>
			<br>
			<div id="myProgress">
				<label>
					Total Peserta Training Edukasi PHP : <?php echo $Training2; ?>
				</label>
				<div id="TrainBar2">
					1%
				</div>
			</div>
			<br>
			<div id="myProgress">
				<label>
					Total Peserta Training Edukasi Stand : <?php echo $Training3; ?>
				</label>
				<div id="TrainBar3">
					1%
				</div>
			</div>
			<br>
			<div id="myProgress">
				<label>
					Total Peserta Training Edukasi VRMMO : <?php echo $Training4; ?>
				</label>
				<div id="TrainBar4">
					1%
				</div>
			</div>
			<br>
			<!-- <button onclick="move()">Click Me</button> --> 
		</div>
		<body onload="move()">
		<script type="text/javascript">
			var i = 0;
			var Train1 = (<?php echo $Training1; ?>);
			var Train2 = (<?php echo $Training2; ?>);
			var Train3 = (<?php echo $Training3; ?>);
			var Train4 = (<?php echo $Training4; ?>);
			var total = Train1 + Train2 + Train3 + Train4;
			function move() {
				if (i == 0) {
					i = 1;
					var limit1 = (Train1 / total) * 100;
					var limit2 = (Train2 / total) * 100;
					var limit3 = (Train3 / total) * 100;
					var limit4 = (Train4 / total) * 100;
					var elem1 = document.getElementById("TrainBar1");
					var elem2 = document.getElementById("TrainBar2");
					var elem3 = document.getElementById("TrainBar3");
					var elem4 = document.getElementById("TrainBar4");
					var width1 = 0;
					var width2 = 0;
					var width3 = 0;
					var width4 = 0;
					var id1 = setInterval(frame1,10);
					var id2 = setInterval(frame2,10);
					var id3 = setInterval(frame3,10);
					var id4 = setInterval(frame4,10);
					function frame1() {
						if (width1 >= limit1) {
							clearInterval(id1);
							i = 0;
						} else {
							width1++;
							elem1.style.width = width1 + "%";
							elem1.innerHTML = width1  + "%";
						}
					}
					function frame2() {
						if (width2 >= limit2) {
							clearInterval(id2);
							i = 0;
						} else {
							width2++;
							elem2.style.width = width2 + "%";
							elem2.innerHTML = width2  + "%";
						}
					}
					function frame3() {
						if (width3 >= limit3) {
							clearInterval(id3);
							i = 0;
						} else {
							width3++;
							elem3.style.width = width3 + "%";
							elem3.innerHTML = width3  + "%";
						}
					}
					function frame4() {
						if (width4 >= limit4) {
							clearInterval(id4);
							i = 0;
						} else {
							width4++;
							elem4.style.width = width4 + "%";
							elem4.innerHTML = width4  + "%";
						}
					}
				}
			}
		</script>
		<?php include '../Footer.php'; ?>
	</body>
</html>