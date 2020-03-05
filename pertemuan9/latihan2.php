<?php 
// tr buat baris pertama
// td aksi untuk membuat tombol mengubah dan menghapus pada aksi
// th buatukuran teks bold
// koneksi ke database, caranya butuh sebuah driver/function yaitu msyqli connect
// urutan, nama host, username mysql, password, dan nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// selanjutnya ambil datadari tabel mahasiswa
// caranya, gunakan function mysqli query
// parameter ada dua, koneksi ke database, lalu querynya mau apa
// disini tidak bisa pakai echo,harus var dump, sama kaya array
// $result = mysqli_query ($conn, "SELECT * FROM mahasiswa"); disini hanya bisa menampilkan kodenya belum bisa menampilkan data
// maka untuk bisa menampilkan data, yaitu. dengab ambil data mahasiswa dari object result, istilahnya (fecth). ada 4 cara
// 1. mysqli fetch row (mengembalikan array numerik, array yg indeksnya angka) 2. mysqli fetch assoc (mengembalikan array assosiative) 3. mysqli fetch array (mengembalikan dalam bentuk numerik dan asosiatif) 4. mysqli fetch object
$result = mysqli_query ($conn, "SELECT * FROM mahasiswa");
// while ($mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs);
// }
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
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
	<?php endwhile; ?>

</table>

</body>
</html>