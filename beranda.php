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
	.title{
		position: absolute;
		top: 20%;
		left: 22%;
		transform: translate(-50%;-50%);
	}
	.title h1{
		font-family: sans-serif;
		columns: #fff;
		font-size: 40px;
		color: white;
	}
	.pengurus img{
		width: 600px;
		position: absolute;
		top: 30%;
		right: 26%;
	}	
	</style>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo"><img src="hima.png"></div>
			<ul>
				<li class="active"><a href="beranda.php"> Beranda </a></li>
				<li><a href="sejarah.php"> Sejarah </a></li>
				<li><a href="makna.php"> Makna Logo </a></li>
				<li><a href="visimisi.php"> Visi & Misi </a></li>
				<li><a href="struktur.php"> Struktur Pengurus </a></li>
				<li><a href="medsos.php"> Media Sosial </a></li>
			</ul>
		</div>
			<div class="title">
				<h1> Selamat Datang di Website HIMASIFO! </h1>
			</div>
			<div class="pengurus"><img src="foto.JPG"></div>
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