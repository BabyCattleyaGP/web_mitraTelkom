<?php
	include 'config.php';

	$email = $_POST["email"];

	$company = $_POST['company'];
	$address = $_POST['address'];
	$name = $_POST['nama'];
	$category = $_POST['category'];

	$query = "UPDATE customer SET nama='$name', company='$company', alamat='$address', kategori='$category' where email='$email' ";

	mysqli_query($conn, $query);

	header('location:db-customer.php?sort=');

?>