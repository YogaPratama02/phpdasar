<?php 
// cek apakah tidak ada data si $_GET
// isset unutk mengecek apakah sebuah variabel itu udah dibikin atau belum
if (!isset($_GET["Nama"]) || 
	!isset($_GET["NPM"]) ||
	!isset($_GET["Prodi"]) || 
	!isset($_GET["Email"]) || 
	!isset($_GET["Gambar"]) ) {
	// paksa user pindah dari latihan 2 ke latihan 1 menggunakan redirect (memindahkan user dari sebuah halaman ke halaman lain), caranya :
	header("Location: latihan1.php");
	exit;
}
// kalo get data dikirim lewat url
// kalo post data dikirim lewat form
// form bisa melakukan get juga, kalo url hanya bisa menggunakan get
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
<ul>
	<li><img src="img/<?php echo $_GET["Gambar"]; ?>"></li>
	<li><?php echo $_GET["Nama"]; ?></li>
	<li><?php echo $_GET["NPM"]; ?></li>
	<li><?php echo $_GET["Prodi"]; ?></li>
	<li><?php echo $_GET["Email"]; ?></li>

</ul>
<a href="latihan1.php">Kembali Ke Daftar Mahasiswa</a>
</body>
</html>
