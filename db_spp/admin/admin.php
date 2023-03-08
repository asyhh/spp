<?php
session_start();
if(empty($_SESSION['id_petugas'])){
	echo"<script>
	alert('Maaf Anda Belum Login'); 
	window.location.assign('../index2.php'); 
	</script>";
}
if($_SESSION['level']!='admin'){
	echo"<script>
	alert('Maaf Anda Bukan Sesi Admin'); 
	Window.location.assign('../index2.php'); 
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

	<h3>Aplikasi Pembayaran SPP.</h3>
	<div class="alert alert-primary">
		Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Pembayaran SPP.
	</div>
	<a href="admin.php" class="btn btn-outline-dark"> Administrator</a>
	<a href="admin.php?url=spp" class="btn btn-outline-dark"> SPP</a>
	<a href="admin.php?url=kelas" class="btn btn-outline-dark"> Kelas</a>
	<a href="admin.php?url=siswa" class="btn btn-outline-dark"> Siswa</a>
	<a href="admin.php?url=petugas" class="btn btn-outline-dark"> Petugas</a>
	<a href="admin.php?url=pembayaran" class="btn btn-outline-dark"> Pembayaran</a>
	<a href="admin.php?url=laporan" class="btn btn-outline-dark"> Laporan</a>
	<a href="admin.php?url=logout" class="btn btn-outline-dark"> Logout</a>

	<div class="card mt-2">
		<div class="card-body">
			<!-- ini isi web kita -->
			<?php
			$file = @$_GET['url'];
			if(empty($file)){
				echo"<h4>Selamat Datang Di Halaman Administator.</h4>";
				echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
			}else{
				include $file.'.php'; 
			}
			?>
		</div>
	</div>

</div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>