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
		position: absolute right;
		float: right;
		list-style-type: none;
		margin-top: -65px;
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
	h1 {
		color: white;
		font-size: 40px;
		position: absolute;
		top: 20%;
		left: 30%;
		transform: translate(-50%;-50%);
	}
	.tabel {
		position: absolute;
		top: 30%;
		left: 20%;
		transform: translate(-50%;-50%);
	}
	th {
		color: white;
		font-size: 15pt;
		border-style: solid;
	}
	td {
		color: white;
		font-size: 14pt;
		border-style: solid;
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
				<li class="active"><a href="struktur.php"> Struktur Pengurus </a></li>
				<li><a href="medsos.php"> Media Sosial </a></li>
			</ul>
			<div class="masuk">
				<?php
				$conn = mysqli_connect("localhost","root","","uts");

				//check connection
				if (mysqli_connect_error()) {
					echo "Failed to connect to MySQL: ".mysqli_connect_error();
					exit();
				} else {

				}
			
				$sql = "SELECT * FROM pengurus";
				$result = mysqli_query($conn, $sql);
				?>
			</div>
			<h1> Kepengurusan Tahun 2020 </h1>
			<div class="tabel"><table>
			<thead>
				<th> NO </th>
				<th width="200px"> NAMA </th>
				<th width="100px"> ANGKATAN </th>
				<th width="200px"> DEPARTEMEN </th>
				<th width="200px"> JABATAN </th>
			</thead>
			<tbody>
				<?php
				while ($tampil = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td align=center>".$tampil['NO']."</td>";
					echo "<td align=center>".$tampil['NAMA']."</td>";
					echo "<td align=center>".$tampil['ANGKATAN']."</td>";
					echo "<td align=center>".$tampil['DEPARTEMEN']."</td>";
					echo "<td align=center>".$tampil['JABATAN']."</td>";
					echo "</tr>";
				}
				?>
			</tbody>
			</div>
		</div>	
	</header>
</body>
</html>