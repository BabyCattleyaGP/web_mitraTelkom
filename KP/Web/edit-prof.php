<?php
	include 'config.php';

	$email = $_POST['email'];

	$company = $_POST['company'];
	$address = $_POST['address'];
	$name = $_POST['nama'];
	$category = $_POST['category'];
	$notelp = $_POST['notelp'];

	$query = "UPDATE customer SET nama='$name', company='$company', alamat='$address', kategori='$category' , notelp='$notelp' where email='$email' ";

	mysqli_query($conn, $query);

	header("location:profil.php");

?>