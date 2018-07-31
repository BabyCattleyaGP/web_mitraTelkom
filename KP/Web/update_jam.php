<?php
	include 'config.php';

	$jamsel = $_POST["jam"];

	$email = $_POST['email'];

	$query = "UPDATE acc_permission SET jam_sel='$jamsel' where email='$email' ";

	mysqli_query($conn, $query);

	header('location:cetak-permission.php');

?>