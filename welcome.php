<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<?php 

	$nama = $Alamat = $telp = $jk = $agama = $bahasa = $prestasi = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Nama"]) && isset($_POST["pil"]) && isset($_POST["Alamat"]) && isset($_POST["Telp"]) && isset($_POST["jk"]) && isset($_POST["Agama"]) && isset($_POST["Prestasi"])) {
		$nama = $_POST["Nama"];
		$Alamat = $_POST["Alamat"];
		$telp = $_POST["Telp"];
		$jk = $_POST["jk"];
		$agama = $_POST["Agama"];
		$prestasi = $_POST["Prestasi"];
		
	}



	echo "Nama: ".$nama."<br>";
	echo "Alamat: ".$Alamat."<br>";
	echo "No Telepon: ".$telp."<br>";
	echo "Jenis kelamin: ".$jk."<br>";
	echo "Bahasa yang dikusasai: ".$bahasa.", ";
	foreach ($_POST["pil"] as $bahasa) {
		echo $bahasa.", ";
	}
	echo "<br>Agama: ".$agama."<br>";
	echo "Prestasi: ".$prestasi."<br>";


	 ?>
</body>
</html>