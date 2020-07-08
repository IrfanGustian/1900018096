<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: grey">
<br><br><br><br>
<div class="container">
	<p style="font-size: 40px;">LIST PENDAFTAR CLUB NGODING</p>

	<center>
		<?php 
		$a = 1;
		$fp = fopen("data.txt", "r");
		echo "<table align=center border=1 cellpadding=5 cellspacing=0 width=75%>";
		
		while ($isi = fgets($fp, 80)) {
			$pisah = explode("|", $isi);
			echo "<tr><th colspan=2>Pendaftar ke-$a&nbsp;&nbsp;<hr></th></tr>";
			echo "<tr><td width=170>Nama</td><td width=270>: $pisah[0]</td></tr>";
			echo "<tr><td width=170>Alamat</td><td width=270>: $pisah[1]</td></tr>";
			echo "<tr><td width=170>Telp</td><td width=270>: $pisah[2]</td></tr>";
			echo "<tr><td width=170>Jenis Kelamin</td><td width=270>: $pisah[3]</td></tr>";
			echo "<tr><td width=170>Bahasa yang dikuasasi</td><td width=270>: $pisah[4]</td></tr>";
			echo "<tr><td width=170>Agama</td><td width=270>: $pisah[5]</td></tr>";
			echo "<tr><td width=170>Prestasi</td><td width=270>: $pisah[6]</td></tr>";
			
			$a = $a + 1;
		}
		echo "</table>";
		 ?>

	</center>
		
	</h5>
	 <ul class="buttons">
	  <li><a  href="form.html">Home</a></li>
	</ul>
	 <hr>
	 <p>Rubah Warna Background</p>
	 <ul class="buttons">
	  <li><a onclick="myFunction()" href="#">MERAH</a></li>
	  <li><a onclick="myFunction1()" href="#">BIRU</a></li>
	  <li><a onclick="myFunction2()" href="#">ABU-ABU</a></li>
	  <li><a onclick="myFunction3()" href="#">HIJAU</a></li>
	</ul>
	 <p>Tugas Project Kuliah Pemrograman WEB</p>

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