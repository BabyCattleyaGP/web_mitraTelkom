<?php
	include 'config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "UPDATE customer SET username='$username', password='$password' where username='$username' ";

	mysqli_query($conn, $query);

	header("location:db-customer.php");

?>