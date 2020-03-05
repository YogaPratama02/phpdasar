<?php 
// user function
// harus definisi fungsi teersebut
// return berfungsi mengembalikan nilai
function salam($waktu, $nama) {
	return "Selamat $waktu, $nama!!";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?= salam("Malam", "Yoga"); ?></h1>
 </body>
 </html>

 