<?php
session_start();
if (empty($_SESSION['fullname'])) {
	header("location:../login.php");
}else{
 include "koneksi.php"; 
 $tanggal=date("Y-m-d");
 $config = mysqli_query($link ,"select * from config");
	$dtConfig = mysqli_fetch_array($config);
	$dateMax = mktime(0,0,0, date("m"), date("d")+$dtConfig[1], date("Y"));
 $tanggal1=date("Y-m-d", $dateMax);
 $rand=rand(12791,190271);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/theme-helper.css">
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<?php include "sidebar.php"; ?>
		<div id="content">
			<div class="content-nav">
				<?php include "navbar.php"; ?>
			</div>
			<div class="container-fluid">
			<div class="row">
			 <div class="col-md-4">
				<form>
					<div class="form-group">
                      <input type="text" class="form-control" name="kode" value="<?php echo $rand; ?>" placeholder="Kode Pinjam">(Kode Peminjaman)
					</div>
					<div class="form-group">
                      <input class="form-control" type="text" name="peminjam" placeholder="Nama Peminjam">
					</div>
					<div class="form-group">
                       <input type="text" class="form-control" placeholder="Judul Buku" name="judul">
					</div>
				<div class="row">
				  <div class="col-md-6">
					<div class="form-group">
						<p>Tanggal Kembali :</p>
						<input type="hidden" value="<?php echo $tanggal; ?>" name=""><strong><?php echo $tanggal; ?></strong><br>(Format tanggal : Y-M-D)
					</div>
				   </div>
				  <div class="col-md-6">
					<div class="form-group">
						<p>Tanggal Kembali :</p>
						<input type="hidden" value="<?php echo $tanggal1; ?>" name=""><strong><?php echo $tanggal1; ?></strong><br>(Format tanggal : Y-M-D)
					</div>
				  </div>
			    </div>
			    <div class="form-group">
                  <button type="submit" class="btn btn-block btn-success">Pinjam</button>
			    </div>
				</form>
			  </div>
              <div class="col-md-offset-5">
               <h1>Peraturan :</h1>
                <ul style="font-size: 25px;">
                 <li>
                  Sebelum Melakukan Transaksi peminjaman , Harap Petugas harus memeriksa kartu agenda peminjaman dan kartu keanggotaan perpustakaan yang dibawa oleh peminjam
                 </li>
                 <li>
                  Form Peminjaman harus diisi secara lengkap
                 </li>
                 <li>
                  Setelah Transaksi berhasil , petugas mencatat peminjaman tersebut di kartu agenda peminjaman yang dibawa oleh peminjam
                 </li>
                </ul>
              </div>
			</div>
		    </div>
		</div>
	</div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</html>