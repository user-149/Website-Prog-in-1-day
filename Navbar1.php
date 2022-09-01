<div class="header">
	<ul class="navbar">
		<li>
			<a href="/training">
				127.0.0.1
			</a>
		</li>
		<li>
			<div class="dropdown">
				<button class="dropbtn">
					Master Data
					<i class="fa fa-caret-down">
					</i>
				</button>
				<div class="dropdown-content">
					<a href="List_Pelatihan.php">
						List Pelatihan
					</a>
					<a href="List_Pengajar.php">
						List Pengajar
					</a>
					<a href="List_Peserta.php">
						List Peserta
					</a>
				</div>
			</div>
		</li>
		<li>
			<div class="dropdown">
				<button class="dropbtn">
					Report Data
					<i class="fa fa-caret-down">
					</i>
				</button>
				<div class="dropdown-content">
					<a href="Report_Pelatihan.php">
						Report Pelatihan
					</a>
					<a href="Report_Pengajar.php">
						Report Pengajar
					</a>
					<a href="Report_Peserta.php">
						Report Peserta
					</a>
				</div>
			</div>
		</li>
		<li>
			<a href="Contact.php">
				Contact
			</a>
		</li>
		<li style="float:right">
			<a href="About.php">
				About
			</a>
		</li>
	</ul>
	<div class="progress-container">
		<div class="progress-bar" id="ProgBar">
		</div>
	</div>  
</div>
<script>
	// When the user scrolls the page, execute myFunction 
	window.onscroll = function() {ProgFunction()};
	function ProgFunction() {
		var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var scrolled = (winScroll / height) * 100;
		document.getElementById("ProgBar").style.width = scrolled + "%";
	}
</script>