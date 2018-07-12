<!DOCTYPE html>
<html>
<head>
	<title>Permohonan Restart Server</title>
	<?php
		include "script.html";
	?>
</head>
<body>

<style>
	.tabel-request th {
		text-align: center;
	}
</style>

<?php
include "config.php";
	$num =  $_POST['h'];
	$company = $_POST['company'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$tanggal = $_POST['tanggal'];
	$nper = $_POST['nper1'];
	$merk = $_POST['merk1'];
	$rack = $_POST['rack1'];
	$ket = $_POST['ket1'];


	if($num==1)
	{		
		$sql = mysqli_query($conn, "INSERT INTO request (company, name, address, phone, tanggal, nper1, merk1, rack1, ket1) 
			VALUES ('".$_POST["company"]."',
					'".$_POST["name"]."',
					'".$_POST["address"]."','".$_POST["phone"]."','".$_POST["tanggal"]."','".$_POST["nper1"]."','".$_POST["merk1"]."','".$_POST["rack1"]."','".$_POST["ket1"]."')");
	}
	
	else{
		$sql = mysqli_query($conn, "INSERT INTO request (company, name, address, phone, tanggal, nper1, merk1, rack1, ket1) VALUES ('".$_POST["company"]."','".$_POST["name"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["tanggal"]."','".$_POST["nper1"]."','".$_POST["merk1"]."','".$_POST["rack1"]."','".$_POST["ket1"]."')");

		for($i=2;$i<=$num;$i++){
			$sql = mysqli_query($conn, "UPDATE request
				SET nper$i = 
				'".$_POST["nper$i"]."', 
					merk$i = '" .$_POST["merk$i"]."',
					rack$i = '" .$_POST["rack$i"]."',
					ket$i = '".$_POST["ket$i"]."' 
					 WHERE name ='".$_POST["name"]."'");
		}
	}
	echo "
<!--===========FORM===========-->
<!--==========================-->

	<div class='container'>
		<div class='show-form'>
			<center>
				<h5>PERMOHONAN RESTART SERVER</h5>
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
						<td>"; echo $name; echo "</td>
					</tr>
					<tr>
						<td>Alamat Kantor</td>
						<td>: </td>
						<td>"; echo $address; echo "</td>
					</tr>
					<tr>
						<td>Telepon/HP</td>
						<td>: </td>
						<td>";echo $phone; echo "</td>
					</tr>
					<tr>
						<td>Tanggal Pekerjaan</td>
						<td>: </td>
						<td>"; echo $tanggal; echo "</td>
					</tr>
					<tr>
						<td>Jenis Pekerjaan</td>
						<td>: </td>
						<td>Permohonan Free Hand Restats</td>
					</tr>
				</table>
				<br>

				<div class='tabel-request'>
					<table border='1px solid black' style='border-collapse: collapse; width: 60%;'>
						<tr>
							<th>NO.</th>
							<th>NAMA PERANGKAT</th>
							<th>MERK/TYPE</th>
							<th>RACK</th>
							<th>KETERANGAN</th>
						</tr>";
				
							
							for($i =1; $i<=$num; $i++){
								${'nper'.$i} = $_POST["nper$i"];
								${'merk'.$i} = $_POST["merk$i"];
								${'rack'.$i} = $_POST["rack$i"];
								${'ket'.$i} = $_POST["ket$i"];
						    	echo "<tr>
							    		<td>"; echo $i; echo "</td>
    
    		 							<td>"; echo ${'nper'.$i}; echo "</td> 

    		 							<td>"; echo ${'merk'.$i}; echo "</td>
    		 							<td>"; echo ${'rack'.$i}; echo "</td>
    		 							<td>"; echo ${'ket'.$i}; echo "</td>
    		 							</tr>";
        							}		
			echo "		</table>
				</div>
			</div>
			<br>
			<br>
			<div class='row'>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-6'>
							<center>
								Bandung, ..................................<br>
								Pemohon izin,<br>
								<br>
								<br>
								______________________
							</center>
						</div>
						<div class='col-md-6'>
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
			Note: Permintaan restart ini telah diketahui dan disetujui oleh Pimpinan Perusahaan pemohon, resiko dan akibat dari pekerjaan ini di luar tanggung jawab Data Center.
		</div>
		<br>
		<button type='submit' name='submit' class='btn btn-primary' onclick='myFunction()'>Ajukan Permohonan</button>
		<script>
			function myFunction() {
				alert('Permohonan telah diajukan. Silakan tunggu notifikasi persetujuan dari Data Center.');
			}
		</script>
	</div>";
?>
<br>
<br>
</body>
</html>