<?php 
	include 'config.php';

	$username = $_GET['username'];
	$query = "DELETE FROM customer WHERE username='$username'";
	mysqli_query($conn, $query);

	header("location:delete-c.php?pesan=hapus");
?>