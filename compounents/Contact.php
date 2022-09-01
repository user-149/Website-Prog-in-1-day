<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include '../Header1.php'; ?>
		<title>
			Contact
		</title>
	</head>
	<body>
		<?php include '../Navbar1.php'; ?>
		<br>
		<br>
		<h1>
			Kontak page
		</h1>
		<div class="container center1">
			<form action="action_page.php">
				<label for="name">
					Nama anda
				</label>
				<input type="text" id="name" name="name" placeholder="Kimi no Namae..">
				<br>
				<!-- <label for="lname">
					No.Telp anda
				</label>
				<input type="number" id="lname" name="lastname" placeholder="Your last name..">
				<br> -->
				<label for="email">
					E-mail anda
				</label>
				<input type="text" id="email" name="email" placeholder="Email anda..">
				<br>
				<label for="subject">
					Subject
				</label>
				<textarea id="subject" name="subject" placeholder="Deskripsikan Kebutuhan Anda.." style="height:200px">
				</textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<?php include '../Footer.php'; ?>
	</body>
</html>