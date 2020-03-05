<?php 
// $mahasiswa = [
// 	["Yoga Pratama", "140310160044", "Fisika", "yogapratama7212@gmail.com"],
// 	["Nauval Bahdian", "140310160076", "Biologi", "Naufalb@gmail.com"],
// 	["Bondan Prakoso", "140310160085", "Teknik Industri", "BondanPra@gmail.com"]
// ];
// Array Associative, yaitu key nya bukan indeks tpi string yg kita buat sendiri
$mahasiswa = [
	["NPM" => "140310160044", "Nama" => "Yoga Pratama", "Prodi" => "Fisika", "Email" => "yogapratama7212@gmail.com", "Gambar" => "Agoy.jpg"],
	["Nama" => "Boa edan", "NPM" => "140310160037", "Prodi" => "Teknik Matematika", "Email" => "boaedan2@gmail.com", "Gambar" => "studio.jpg"],
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
 	<?php foreach($mahasiswa as $mhs) : ?>
 		<ul>
 			<li><img src="img/<?= $mhs["Gambar"]; ?>">
 			</li>
 			<li>Nama : <?= $mhs["Nama"]; ?></li>
 			<li>NPM : <?= $mhs["NPM"]; ?></li>
 			<li>Prodi : <?= $mhs["Prodi"]; ?></li>
 			<li>Email : <?= $mhs["Email"]; ?></li>

 		</ul>	
 	<?php endforeach; ?>
 </body>
 </html>