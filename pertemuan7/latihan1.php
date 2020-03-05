<?php 
// variabel yang ada dalam function itu hanya berlaku didalam functionnya aja
// <br> membuat garis baru
// function global berfungsi untuk mencari variabel diluar function
// variabel superglobals, $_Get, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (SEMUANYA TYPE ARRAY ASSOSIATIF). 
// array hanya bisa mengguakan var_dump /print_r
// #$_SERVER sudah memiliki nilai banyak
// a tab untuk membuat link
// menggunakan get bisa data pada li latihan 2 itu sesuai dengan data yang di klik dengan user pada latihan 1
// dikirimkan menggunanakan metode request get ditangkap oleh variabel superglobal
// metode request get adalah metode pengiriman data melalui url dan data tsb bisa diambil/ditangkap oleh variabel super globat $ GET
$mahasiswa = [
	["NPM" => "140310160044", "Nama" => "Yoga Pratama", "Prodi" => "Fisika", "Email" => "yogapratama7212@gmail.com", "Gambar" => "Agoy.jpg"],
	["Nama" => "Brandon Kent", "NPM" => "140310160037", "Prodi" => "Teknik Matematika", "Email" => "boaedan2@gmail.com", "Gambar" => "studio.jpg"],
	["Nama" => "Bondan Prakoso", "NPM" => "140310160047", "Prodi" => "Kimia", "Email" => "BondanPra@gmail.com", "Gambar" => "sensor.jpg"]
];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li>
			<a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&NPM=<?php echo $mhs["NPM"]; ?>&Prodi=<?php echo $mhs["Prodi"]; ?>&Email=<?php echo $mhs["Email"]; ?>&Gambar=<?php echo $mhs["Gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
		</li>



	<?php endforeach; ?>
</ul>

</body>
</html>







