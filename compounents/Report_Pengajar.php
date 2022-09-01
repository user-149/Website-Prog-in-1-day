<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>
			Report Pengajar
		</title>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h4 align="center">
			Berikut Current Ratio pengajar berdasarkan Gender
		</h4>
		<?php
			// membuat query;
			$strQuery="SELECT * FROM pengajar;";
			// proses query;
			$query=mysqli_query($conTraining, $strQuery) or die(mysqli_error());
			// fetching data;
			$PopulasiPengajarPria = 0;
			$PopulasiPengajarWanita = 0;
			while ($data=mysqli_fetch_array($query)) {
				// code...
				if ($PengajarKelamin=$data["Pengajar_Kelamin"] == "Pria") {
					// code...
					$PopulasiPengajarPria=$PopulasiPengajarPria+1;
				} elseif ($PengajarKelamin=$data["Pengajar_Kelamin"] == "Wanita") {
					// code...
					$PopulasiPengajarWanita=$PopulasiPengajarWanita+1;
				} else {
				}
			}
		?>
		<div class="container center2">
			<div id="myProgress">
				<label>
					Total Pengajar Pria : <?php echo $PopulasiPengajarPria; ?>
				</label>
				<div id="myBar1">
					1%
				</div>
			</div>
			<br>
			<div id="myProgress">
				<label>
					Total Pengajar Wanita : <?php echo $PopulasiPengajarWanita; ?>
				</label>
				<div id="myBar2">
					1%
				</div>
			</div>
			<br>
			<!-- <button onclick="move()">Click Me</button> --> 
		</div>
		<body onload="move()">
		<script type="text/javascript">
			var i = 0;
			var wanita = (<?php echo $PopulasiPengajarWanita; ?>);
			var pria = (<?php echo $PopulasiPengajarPria; ?>);
			var total = pria + wanita;
			function move() {
				if (i == 0) {
					i = 1;
					var limit1 = (pria / total) * 100;
					var limit2 = (wanita / total) * 100;
					var elem1 = document.getElementById("myBar1");
					var elem2 = document.getElementById("myBar2");
					var width1 = 0;
					var width2 = 0;
					var id1 = setInterval(frame1,10);
					var id2 = setInterval(frame2,10);
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
				}
			}
		</script>
		<?php include '../Footer.php'; ?>
	</body>
</html>