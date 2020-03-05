<!-- // Pengulangan
// for
// while
// do..while
// foreach : pengulangan khusus array

// for($i = 0; $i < 5; $i++) {
// 	echo "Yoga <br>";
// }
// $i = 0;
// while ($i < 5) {
// 	echo "Tai Anjing <br>";
// $i++;
// }
// $i = 0;
// do {
// 	echo "Yoga Pratama <br>";
// $i++;
// } while ($i < 10); -->
<!-- <<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<style>
		.warna-baris {

			background-color: red;
		}
	</style>
</head>
<body>
	
<table border="1" cellpading="15" cellspacing="0">
<?php
	for ($i=1; $i <= 5; $i++ ) {
		echo "<tr class='warna-baris'>";
		for ($j = 1; $j <= 5; $j++)
			echo "<td> $i, $j </td>";
		echo "</tr>";

	}
 ?>
 <?php if($i % 2 == 1) : ?>
 	<tr class="warna-baris">
 <?php else : ?>
 	<tr>
 <?php endif; ?>
</table

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
<table border="1" cellpadding="15" cellspacing="0">
	<?php for ($i = 1; $i <= 5; $i++): ?>
		<tr>
			<?php for ($j = 1; $j <= 5; $j++) : ?>
				<td> <?= "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>

	<?php endfor; ?>

</table>


</body>
</html>