<?php 
// type dan name harus ada pada post
// untuk mengetahui data yang dkirim kemana butuh atribut didalam form, yaitu action dan method
// mau bikin sebuah form, yang form ini menggunakan metode request post dan semua data didalam form akan dikirimkan ke latihan4
// get ada di url, post gada di url

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if (isset($_POST["Submit"]) ) : ?>
		<h1>Halo, Selamat datang <?= $_POST["nama"]; ?>!!</h1>
<?php endif ; ?>


<form action="latihan4.php" method="post">
	Masukan Nama :
	<input type="text" name="nama">
	<br>
	<button type = "Submit" name = "Submit">Kirim!</button>


</form>


</body>
</html>