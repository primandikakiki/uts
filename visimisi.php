<!DOCTYPE html>
<html>
<head>
<title> HIMASIFO </title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		font-family: arial;
		background-color: #027DC9;
	}
	ul{
		float: right;
		list-style-type: none;
		margin-top: 40px;
	}
	ul li{
		display: inline-block;
	}
	ul li a{
		text-decoration: none;
		color: #fff;
		padding: 5px 20px;
		border: 1px solid transparent;
		transition: 0.6s;
		margin-top: 10px;
	}
	ul li a:hover{
		background-color: #fff;
		color: #000;
	}
	ul li.active a{
		background-color: #fff;
		color: #000;
	}
	.logo img{
		float: left;
		width: 500px;
		height: auto;
	}
	.tanggal {
		font-family: sans-serif;
		font-size: 12px;
		color: white;
		float: right;
		position: absolute;
		top : 97%;
	}
	h1 {
		color: white;
		font-size: 40px;
		position: absolute;
		top: 20%;
		left: 48%;
		transform: translate(-50%;-50%);
	}
	.visi {
		color: white;
		position: absolute;
		top: 30%;
		left: 8%;
	}
	h2 {
		color: white;
		font-size: 40px;
		position: absolute;
		top: 40%;
		left: 48%;
		transform: translate(-50%;-50%);
	}
	.misi {
		color: white;
		position: absolute;
		top: 50%;
		left: 8%;	
	}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo"><img src="hima.png"></div>
			<ul>
				<li><a href="beranda.php"> Beranda </a></li>
				<li><a href="sejarah.php"> Sejarah </a></li>
				<li><a href="makna.php"> Makna Logo </a></li>
				<li class="active"><a href="visimisi.php"> Visi & Misi </a></li>
				<li><a href="struktur.php"> Struktur Pengurus </a></li>
				<li><a href="medsos.php"> Media Sosial </a></li>
			</ul>
			<h1> Visi </h1>
			<div class="visi">
				<script language="Javascript">
					document.write("Terbentuknya HIMASIFO sebagai wadah pengembangan mahasiswa yang responsif, aktif, sinergis, akomodatif dengan berlandaskan kekeluargaan")
				</script>
			</div>
			<h2> Misi </h2>
			<div class="misi">
				<script language="Javascript">
					document.write("1) Menjalin hubungan yang harmonis dengan civitas akademika dan alumni")
					document.write("<br>2) Mengadakan kegiatan kemahasiswaan yang bertujuan untuk mengembangkan kualitas akademik dan non akademik mahasiswa SI")
					document.write("<br>3) Menampung dan menindaklanjuti aspirasi mahasiswa SI")
					document.write("<br>4) Turut serta dalam kegiatan kampus UPN 'Veteran' Jawa Timur baik internal maupun eksternal")
				</script>		
			</div>
			<div class="tanggal">
				<?php
				date_default_timezone_set("Asia/Jakarta");
				echo date("D, d-F-Y");
				?>
			</div>	
		</div>	
	</header>
</body>
</html>