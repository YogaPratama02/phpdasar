<?php 
// apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"]) ) {
	// cek username dan pass
	if ($_POST["Username"] == "Yoga Pratama" && $_POST["Password"] == "kepo123") {
// jika benar redirect ke halaman admin
		header("Location: admin.php");
		exit;

} else  {

// jika salah, tampilkan pesan kesalahan

	$error = true;
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
<h1>Login Admin</h1>
<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;";>Username / Password salah!</p>
<?php endif; ?>
<ul>
<form action="" method="post">
	<li>
		<label for="Username">Username :</label>
		<input type="text" name="Username" id="Username">
	</li>
	<li>
		<label for="Password">Password :</label>
		<input type="Password" name="Password" id="Password">

	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>

</form>
</ul>

</body>
</html>