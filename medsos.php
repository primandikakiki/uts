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
		left: 42%;
		transform: translate(-50%;-50%);
	}
	.medsos {
		color: white;
		font-size: 20px;
		text-align: justify;
		position: absolute;
		top: 35%;
		left: 36%;
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
				<li><a href="visimisi.php"> Visi & Misi </a></li>
				<li><a href="struktur.php"> Struktur Pengurus </a></li>
				<li class="active"><a href="medsos.php"> Media Sosial </a></li>
			</ul>
			<h1> Contact Us </h1>
			<div class="medsos">
				<p> Line 		: @cpl5268n </p>	
				<p> Instagram 	: <a href="https://www.instagram.com/himasifo_upnvjatim/" target="_self"> himasifo_upnvjatim </a> </p>
				<p> Facebook	: <a href="https://www.facebook.com/Himasifo-UPN-Veteran-Jatim-103329624618002" target="_self"> Himasifo UPN Veteran Jatim </a> </p>
				<p> Youtube 	: <a href="https://www.youtube.com/channel/UComN7Zo6fWi9NSw6uXTzjhQ" target="_self"> HIMASIFO UPNVJATIM </a> </p>
			</div>
			<div class="tanggal">
				<?php
				date_default_timezone_set("Asia/Jakarta");
				echo date("D, d-F-Y");
				?>
			</div>	
	</header>
</body>
</html>