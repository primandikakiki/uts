<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check Connection
if (!$conn) {
	die("Connection failed :".mysqli_connect_error());
}

/*$sql = "CREATE TABLE pengurus (
NO INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(50) NOT NULL,
ANGKATAN VARCHAR(10) NOT NULL,
DEPARTEMEN VARCHAR(50) NOT NULL,
JABATAN VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>