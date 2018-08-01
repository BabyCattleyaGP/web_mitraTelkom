\
<!DOCTYPE html>
<html>
<head>
	<title>Surat Izin Melaksanakan Kunjungan/Pekerjaan</title>
	<?php
		include "script.html";
	?>
</head>
<body>


<!--===========FORM===========-->
<!--==========================-->

	<?php

	include "config.php";
	include('logincust.php');
	
	$username=$_SESSION['username'];
	$image=$_SESSION['image'];

		$company = $_POST["company"];
		$name1 = $_POST["name1"];
		$name2 = $_POST["name2"];
		$name3 = $_POST["name3"];
		$name4 = $_POST["name4"];
		$name5 = $_POST["name5"];
		$name6 = $_POST["name6"];
		$name7 = $_POST["name7"];
		$name8 = $_POST["name8"];
		$name9 = $_POST["name9"];
		$name10 = $_POST["name10"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$job = $_POST["job"];
		$hari = $_POST["hari"];
		$tanggal = $_POST["tanggal"];
		$jam = $_POST["jam"];
	?>


<!-- INSERT DATA TO DATABASE -->
<?php

	if(isset($_POST['submited'])) {
		$sql = mysqli_query($conn, "INSERT INTO permission (company, name1, name2, name3, name4, name5, address, phone, email, job, hari, tanggal, jam) VALUES ('".$_POST["company"]."','".$_POST["name1"]."','".$_POST["name2"]."','".$_POST["name3"]."','".$_POST["name4"]."','".$_POST["name5"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["job"]."','".$_POST["hari"]."','".$_POST["tanggal"]."','".$_POST["jam"]."')");
	}

	echo "
	<div class='container'>
		<div class='show-form'>
			<center>
				<h5>SURAT PEMBERITAHUAN</h5>
				<h5>IZIN MELAKSANAKAN KUNJUNGAN/PEKERJAAN</h5>
			</center>
			<br>
			<div class='isi-form'>
				<table border='0' style='width: 50%;'>
					<tr>
						<td>Nama Perusahaan</td>
						<td>: </td>
						<td>"; echo $company; echo "</td>
					</tr>
					<tr>
						<td>Nama Pegawai</td>
						<td>: </td>
						<td>";echo $name1; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name2; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name3; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name4; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name5; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name6; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name7; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name8; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name9; echo "</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>"; echo $name10; echo "</td>
					</tr>
					<tr>
						<td>Alamat Perusahaan</td>
						<td>: </td>
						<td>"; echo $address; echo "</td>
					</tr>
					<tr>
						<td>Telepon/HP</td>
						<td>: </td>
						<td>"; echo $phone; echo "</td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>: </td>
						<td>"; echo $email; echo "</td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>: </td>
						<td>"; echo $job; echo "</td>

					</tr>
				</table>
			</div>
			<br>
			mohon ijin untuk melaksanakan pekerjaan pada hari <?php echo $hari ?> tanggal <?php echo $tanggal ?> jam <?php echo $jam ?> WIB di lokasi Data Center Bandung.
			<br>
			<br>
			<div class='row'>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6'>
							<center>
								Bandung, ...................................<br>
								Pemohon izin,<br>
								<br>
								<br>";

								echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';
							  ?>
								______________________
							</center>
						</div>
						<div class="col-md-6">
							<center>
								Mengetahui,<br>
								Data Center Bandung<br>
								<br>
								<br>
								______________________
							</center>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			Note: Selama kunjungan/pekerjaan tetap berpedoman pada Tata Tertib Data Center Bandung dan selalu memperhatikan keamanan K3 (Keselamatan Kesehatan Kerja).
		</div>
		<br>
		<br>
		<br>
		<br>
		<button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">Ajukan Permohonan</button>
		<script>
			function myFunction() {
				alert("Permohonan telah diajukan. Silakan tunggu notifikasi persetujuan dari Data Center.");
			}
		</script>
	</div>

<br>
<br>

</body>
</html>