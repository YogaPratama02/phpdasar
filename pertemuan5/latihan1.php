<?php 
// array, yaitu variabel yang dapat memiliki banyak nilai
// array ialah pasangan antara key dan value
// keynya index, yang dimulai dari 0
// membuat array (cara lama),
$hari = array("senin", "selasa", "rabu");
$arr1 = [123, "tulisan", false];
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
// elemen pada array, tipe data boleh berbeda
// angka = 123 , "string" = huruf , boolean = true false
// menampilkan array, echo gabisa menampilkan array, menggunakan :
// var_dump () / print_r()
// var_dump($hari);
// print_r($bulan);
// echo "<br>";
// elemen pertama pada array nilainya 0
// cara menampilkan 1 elemen pada array
// echo "<br>"; bikin baris baru
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

// var_dump dan print_r digunakan untuk web developernya, sedangkan user tidak perlu untuk ditampilkan string pada laua


 ?>