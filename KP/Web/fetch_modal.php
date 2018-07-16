<?php
	include 'config.php'; //Include database connection

if($_POST['nama']) {
    $nama = $_POST['nama']; //escape string

    // Run the Query
   	$sql = mysqli_query($conn, "SELECT * FROM customer WHERE nama='$nama'");

   // Fetch Records
	$row = mysqli_fetch_array($sql);

			$nama = $row['nama'];
			$email = $row['email'];
			
    // Echo the data you want to show in modal
			echo "<div class='modal-body'>";
			echo '<label for="email">Email</label>
				<input class="form-control" email="disabledInput" type="text" placeholder="'.$email.'"disabled>';
			
			echo "<label for='name'>Nama Pegawai</label>";
			echo "<input type='text' name='name' class='form-control' required='' placeholder='".$nama."'>";
			echo " <label for='company'>Nama Perusahaan</label>";
			echo "<input type='text' name='company' class='form-control' required=''>";
			echo "<label for='address'>Alamat Perusahaan</label>";
			echo "<input type='text' name='address' class='form-control' required=''>";
			echo "<label for='category'>Kategori</label>";
			echo "<input type='text' name='category' class='form-control' required=''>";
			echo "</div>";
 }
?>