  <!DOCTYPE html>
<html>
<head>
	<title>Data Customer</title>
	<?php
		include "script.html";
	?>
<script type="text/javascript">
	
	$(document).ready(function(){
    $('#edit-modal').on('show.bs.modal', function (e) {
        var nama = $(e.relatedTarget).data('nama');
        $.ajax({
            type : 'post',
            url : 'fetch_modal.php', //Here you will fetch records 
            data :  'nama='+ nama, //Pass $nama
            success : function(data){
            $('.modal-body').html(data);//Show fetched data from database
            }
        });
     });
});

</script>

</head>
<body>

<!--==========HEADER==========-->
<!--==========================-->
<header>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" data-toggle="affix">
		<div class="container">
			<a class="navbar-brand smooth-scroll" href="index.php">
				<img src="img/logo.png" alt="logo" style="width: 160px; height: 45px;">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="admin.php">Kembali</a></li>
					<li class="nav-item"><a class="nav-link" href="adminlog.php">Keluar</a></li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<!--==========TABEL===========-->
<!--==========================-->
<section class="db-cust" id="db-cust">
	<div class="container">
		<div class="row title-bar">
			<div class="col-md-12">
				<h1 class="wow fadeInUp">Data Customer</h1>
				<div class="heading-border"></div>
			</div>
		</div>
		<div class="row" style="overflow-x: auto;">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Nama Perusahaan</th>
						<th>Telepon/HP</th>
						<th>E-mail</th>
						<th>Alamat</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php

						/* Get Data from Database */
						include "config.php";
						$sql = mysqli_query($conn, "SELECT * FROM customer");
						$no = 1;

						/* Show Data */
						while ($data = mysqli_fetch_array($sql)) {

					?>

					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['company'] ?></td>
						<td><?php echo $data['notelp'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['alamat'] ?></td>
						<td><?php echo $data['kategori'] ?></td>
						<td>
			<?php  
			echo '
			<button type="button" class="btn btn-green">
			<a href="#edit-modal" id="custId" data-toggle="modal" data-id="'.$data['nama'].'">Edit</a>
			</button>';
			?>
			
			<button type="button" class="btn btn-green"><a href="delete-c.php?username=<?php echo $data['username']; ?>">Hapus</a></button>
						</td>
					</tr>

					<?php

						}

					?>
				</tbody>
			</table>
			<button type="button" class="btn btn-green"><a href="add-cust.php?">Tambah</a></button>
		</div>
		<br>
	</div>
</section>
<br><br><br>

<!--============EDIT============-->
<!--============================-->
<section id="login">
	<div class="modal fade" id="edit-modal" tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="fa fa-times" aria-hidden="true"></span>
					</button>
				</div>
				<div id="div-forms">
					<form id="login-form" method="POST" action="edit-c.php"><br>
						<h5 class="text-center">Edit Data</h5>
						<div class="modal-body">
						</div>
						<div class="modal-footer text-center">
							<div>
								<button type="submit" name="edit-c" class="btn btn-general btn-white">Edit</button>
								<a href="db-customer.php">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==========FOOTER==========-->
<!--==========================-->
<footer>
	<div id="footer-s1" class="footer-s1">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<center>
							<img src="img/logo.png" alt="" class="img-fluid" style="width: 210px; height: 60px;">
						</center>
					</div>
					<div class="col-md-6 col-sm-6">
						<center>
							<address class="address-details-f">
								CONTACT<br>
								UD. Data Center Bandung<br>
								Jl. Lembong No. 11, Braga, Sumur<br>
								Bandung, Jawa Barat<br>
								Phone: (022) 000000<br>
								E-mail: <a href="mailto:haha@hahaha.com" class="">haha@hahaha.com</a>
							</address>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="footer-copyrights">
						<p>Copyrights &copy; 2018 All Rights Reserved by PT. Sigma Cipta Caraka</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#db-permission" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="db-permission" role="button">
		<i class="fa fa-angle-up"></i>
	</a>
</footer>

</body>
</html>