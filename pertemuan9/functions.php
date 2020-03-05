<?php 
// koneksi ke database, caranya butuh sebuah driver/function yaitu msyqli connect
// urutan, nama host, username mysql, password, dan nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query ($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ); {
		$rows[] = $row;

	}
	return $rows;
}


 ?>