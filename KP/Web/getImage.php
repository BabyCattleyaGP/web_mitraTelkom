get.phpPHP

<?php
//koneksi ke database
include "config.php";

//ambil id dari $_GET id
$username = addslashes($_GET['username']);

//query ke database
$query = mysql_query("SELECT * FROM customer WHERE username='$username'");
$row = mysql_fetch_assoc($query);
$image_db = $row['image'];

header("Content-type: image/jpg");

echo $image_db;
?>