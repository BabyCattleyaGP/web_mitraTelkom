<?php
	include 'config.php';

	$username = $_POST["username"];

	$name = $_POST['name'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$category = $_POST['category'];

	$query = "UPDATE customer SET nama='$name', company='$company', alamat='$address', kategori='$category' where username='$username' ";

	mysqli_query($conn, $query);

	header("location:db-customer.php");

?>