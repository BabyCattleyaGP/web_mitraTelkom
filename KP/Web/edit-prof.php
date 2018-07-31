<?php
	include 'config.php';

	$name = $_POST['name'];
	

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$notelp = $_POST['notelp'];
	$image = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
	

	$query = "UPDATE customer SET username='$username', password='$password', notelp='$notelp',email='$email', image='$image' where nama='$name' ";

	mysqli_query($conn, $query);

	header("location:profil.php");


?>