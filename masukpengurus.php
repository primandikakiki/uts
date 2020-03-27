<?php
$conn = mysqli_connect("localhost","root","","uts");

//check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	exit();
} else {
	echo "<p>Sudah Connect</p>";
}
//Create Database
/*$sql = "INSERT INTO pengurus (nama, angkatan, departemen, jabatan)
VALUES ('Talytakum Naibaho', '2017', 'BPH', 'Ketua Himpunan'), ('M Nurfian T', '2017', 'BPH', 'Wakil Ketua Himpunan'),
('Indira Setia A', '2018', 'BPH', 'Sekretaris 1'), ('Bias Firmansyah', '2019', 'BPH', 'Sekretaris 2'),
('Clariza Risanti', '2018', 'BPH', 'Bendahara'), ('Mochamad Suhri A R', '2019', 'Advokasi', 'Kepala Departemen'),
('Putu Kumara D', '2019', 'Advokasi', 'Sekretaris Departemen'), ('Talenta Ekklesia', '2019', 'Advokasi', 'Anggota Departemen'),
('Ferry Kurniawan', '2019', 'Advokasi', 'Anggota Departemen'), ('Primandika Hakiki', '2018', 'Dalam Negeri', 'Kepala Departemen'),
('Inas Syarifah A', '2019', 'Dalam Negeri', 'Sekretaris Departemen'), ('Asri Kinanti F', '2019', 'Dalam Negeri', 'Anggota Departemen'),
('Siti Lailatul Z', '2019', 'Dalam Negeri', 'Anggota Departemen'), ('Brian Soebari', '2019', 'Dalam Negeri', 'Anggota Departemen'),
('Cready Gildbrandsen', '2018', 'Kaderisasi', 'Kepala Departemen'), ('Anisa Rahma S', '2019', 'Kaderisasi', 'Sekretaris Departemen'),
('Muhammad Alroy', '2019', 'Kaderisasi', 'Anggota Departemen'), ('Faras Ardian', '2019', 'Kaderisasi', 'Anggota Departemen'),
('Nurisa R Shantika', '2018', 'Kewirausahaan', 'Kepala Departemen'), ('Alfiarto Randi', '2019', 'Kewirausahaan', 'Sekretaris Departemen'),
('Abiela Titan S', '2019', 'Kewirausahaan', 'Anggota Departemen'), ('Ainun Rizkyani F', '2019', 'Kewirausahaan', 'Anggota Departemen'),
('Pratama Puji A', '2018', 'Kominfo', 'Kepala Departemen'), ('Indah Maharani', '2019', 'Kominfo', 'Sekretaris Departemen'),
('Harun A R', '2019', 'Kominfo', 'Anggota Departemen'), ('Ruben Coda S I', '2019', 'Kominfo', 'Anggota Departemen'),
('Tiara K Miranti', '2018', 'Litbang', 'Kepala Departemen'), ('Tamariska Laras S', '2019', 'Litbang', 'Sekretaris Departemen'),
('Hastri Cantya', '2019', 'Litbang', 'Anggota Departemen'), ('Nurrachman Budi M', '2019', 'Litbang', 'Anggota Departemen'),
('Rifat Hafiz', '2019', 'Litbang', 'Anggota Departemen'), ('Zabrina Tuzzahra', '2018', 'Luar Negeri', 'Kepala Departemen'),
('Ully Laili M', '2019', 'Luar Negeri', 'Sekretaris Departemen'), ('Bagus Rizky P', '2019', 'Luar Negeri', 'Anggota Departemen'),
('Alif Fajar B A', '2019', 'Luar Negeri', 'Anggota Departemen')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>