<?php 
// $mahasiswa = ["Yoga Pratama", "14031016044", "Fisika", "yogapratama7212@gmail.com"];
// gimana jika didalam array lebih daari satu mahasiswa ?
// menggunakan multi-dimension array, yaitu
$mahasiswa = [
	["Yoga Pratama", "14031016044", "Fisika", "yogapratama7212@gmail.com"],
	["Bondan Prakoso", "14031016094", "Kimia", "bprakoso7212@gmail.com"],
	["Julian Ramadhan", "14031016078", "Ilkom", "JulianRama@gmail.com"]
];

// menampilkan data dalam bentuk list, ul dan li
// array numerik, array yg indeksnya angka
// array asosiatof, indeknya string
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
	<li>Nama :<?= $mhs[0]; ?></li>
	<li>NPM :<?= $mhs[1]; ?></li>
	<li>Prodi:<?= $mhs[2]; ?></li>
	<li>Email:<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
 </body>
 </html>