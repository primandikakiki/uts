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
		top: 15%;
		left: 40%;
		transform: translate(-50%;-50%);
	}
	.title h1{
		font-family: sans-serif;
		columns: #fff;
		font-size: 40px;
		color: white;
	}
	.lambang img{
		width: 220px;
		position: absolute;
		top: 33%;
		right: 42%
	}
	.sembunyi {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 14px;
		margin: 4px 2px;
		cursor: pointer;
		position: absolute;
		top: 22%;
		left: 38%;
	}
	.tampil {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 14px;
		margin: 4px 2px;
		cursor: pointer;
		position: absolute;
		top: 22%;
		left: 50%;
	}
	.arti {
		color: white;
		position: absolute;
		top: 69%;
		left: 17%;
		text-align: center;
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
				<li class="active"><a href="makna.php"> Makna Logo </a></li>
				<li><a href="visimisi.php"> Visi & Misi </a></li>
				<li><a href="struktur.php"> Struktur Pengurus </a></li>
				<li><a href="medsos.php"> Media Sosial </a></li>
			</ul>
	</header>		
			<div class="title">
				<h1> Makna Logo </h1>
			</div>
				<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$(".sembunyi").click(function() {$("#foto").hide("slow") });
						$(".tampil").click(function() {$("#foto").show("slow") });
				});
			</script>
			<div class="lambang">
				<br> <br> <br> <br> <br> <br> <br>
				<button class="sembunyi"> Sembunyikan </button>
				<button class="tampil"> Tampilkan </button>
				<p> <img id="foto" src="himasifo.png"> </p>
			</div>
			<div class="arti">
			<p>Warna Biru = melambangkan mahasiswa berwawasan luas</p>

			<p>Warna Kuning = bijaksana dan cerdas</p>

			<p>Segilima = berasaskan Pancasila</p>

			<p>Roda Gerigi = bergerak maju dan berkembang</p>

			<p>11 Gerigi = 1 Tuhan kita dan 10 jari untuk berdoa</p>

			<p>Aktor UML = jati diri mahasiswa Sistem Informasi dengan warna hijau sebagai almamater UPN "Veteran" Jawa Timur</p>

			<p>Lambang DFD - Entitas = melambangkan bagian bagian dari Himasifo</p>

			<p>Lambang DFD - Proses = berbeda - beda dalam satu kekompakkan Himasifo</p>

			<p>Lambang DFD - Data Store = bersatu dalam satu wadah Himasifo</p>
			</div>
			<div class="tanggal">
				<?php
				date_default_timezone_set("Asia/Jakarta");
				echo date("D, d-F-Y");
				?>
			</div>	
		</div>	
</body>
</html>