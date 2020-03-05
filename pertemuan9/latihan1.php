<?php 
require'functions.php';
// require untuk menghubungkan file ke file
$mahasiswa = query("SELECT * FROM mahasiswa");
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>NPM</th>
		<th>Prodi</th>
		<th>Email</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td><img src="img/<?php echo $row["gambar"] ;?>" width="50"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["npm"]; ?></td>
		<td><?= $row["prodi"]; ?></td>
		<td><?= $row["email"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>

</table>

</body>
</html>