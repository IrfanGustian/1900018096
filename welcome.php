<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: grey">
<br><br><br><br>
<div class="container">
	<p style="font-size: 40px;">TERIMA KASIH ANDA TELAH MENGISI FORM</p>

	<center>
	<?php 
	$fp = fopen("data.txt", "a+");

	$nama = $Alamat = $telp = $jk = $agama = $bahasa = $prestasi = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Nama"]) && isset($_POST["pil"]) && isset($_POST["Alamat"]) && isset($_POST["Telp"]) && isset($_POST["jk"]) && isset($_POST["Agama"]) && isset($_POST["Prestasi"])) {
		$nama = $_POST["Nama"];
		$Alamat = $_POST["Alamat"];
		$telp = $_POST["Telp"];
		$jk = $_POST["jk"];
		$agama = $_POST["Agama"];
		$prestasi = $_POST["Prestasi"];
		
	}

	fputs($fp, "$nama|$Alamat|$telp|$jk|$bahasa, ");
	foreach ($_POST["pil"] as $bahasa) {
		fputs($fp, "$bahasa, ");
	}
	fputs($fp, "|$agama|$prestasi\n");


	 ?>
		
	</center>
		
	</h5>
	 <ul class="buttons">
	  <li><a  href="table.php">Lihat Pendaftar</a></li>
	</ul>
	 <hr>
	 <p>Rubah Warna Background</p>
	 <ul class="buttons">
	  <li><a onclick="myFunction()" href="#">MERAH</a></li>
	  <li><a onclick="myFunction1()" href="#">BIRU</a></li>
	  <li><a onclick="myFunction2()" href="#">ABU-ABU</a></li>
	  <li><a onclick="myFunction3()" href="#">HIJAU</a></li>
	</ul>
	 <p>Praktikum Pemrograman Web 12</p>

    </div>

</div>
<script>
function myFunction() {
  document.body.style.backgroundColor = "#ff9999";
}

function myFunction1() {
  document.body.style.backgroundColor = "#99b3ff";
}

function myFunction2() {
  document.body.style.backgroundColor = "grey";
}

function myFunction3() {
  document.body.style.backgroundColor = "#b3ff99";
}
</script>

</body>
</html>