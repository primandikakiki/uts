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

	.sejarah h1 {
		font-family: sans-serif;
		columns: #fff;
		font-size: 40px;
		color: white;
		position: absolute;
		top: 20%;
		left: 25%;
		transform: translate(-50%;-50%);
	}
	.sejarah p{
		color: white;
		position: absolute;
		top: 40%;
		text-align: justify;
		padding-left: 50px;
		padding-right: 50px;
	}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo"><img src="hima.png"></div>
			<ul>
				<li><a href="beranda.php"> Beranda </a></li>
				<li class="active"><a href="sejarah.php"> Sejarah </a></li>
				<li><a href="makna.php"> Makna Logo </a></li>
				<li><a href="visimisi.php"> Visi & Misi </a></li>
				<li><a href="struktur.php"> Struktur Pengurus </a></li>
				<li><a href="medsos.php"> Media Sosial </a></li>
			</ul>
			<div class="sejarah">
				<h1> Sejarah Terbentuknya HIMASIFO </h1>
				<p> Di jurusan Sistem Informasi UPN "Veteran" Jawa Timur, ada organisasi mahasiswa (ormawa) yang bernama HIMASIFO. HIMASIFO telah diresmikan pada tanggal 10 Juli 2010 dalam KKM-SI (Kongres Keluarga Mahasiswa-Sistem Informasi) oleh ketua umum sidang kongres yang dihadiri dan disepakati oleh perwakilan delegasi mahasiswa angkatan 2007, 2008, 2009 secara sah menjadi Himpunan Mahasiswa Jurusan Sistem Informasi UPN “Veteran” Jawa Timur. </p>		
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