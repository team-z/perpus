<?php
session_start();
if (empty($_SESSION['fullname'])) {
	header("location:../login.php");
}else{
 include "koneksi.php"; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Peminjam</title>
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
			 	<table class="table table-striped table-bordered">
					<form method="POST" action="proses-pinjam.php">
						<tr>
							<th>NO</th>
							<th>ID</th>
							<th>JUDUL BUKU</th>
							<th>NAMA PEMINJAM</th>
							<th>TANGGAL PEMIJAMAN</th>
							<th>TANGGAL KEMBALI</th>
							<th>KEMBALI BUKU</th>
						</tr>
									<?php  
					include "koneksi.php";	
					$no=1;
					$result= mysqli_query($link, "SELECT * FROM pinjam");
					while ($row= mysqli_fetch_array($result)) {
					?>
						<TR>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row[0]; ?></td>

							<td><?php echo $row[1] ; ?></td>

							<td><?php echo $row[2]; ?></td>

							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><a href="delete-peminjam.php?id=<?php echo $row[0];?>" onclick="return confirm ('Apakah mengembalikan <?php echo $row[1]." ".$row[2]." ".$row[3]." ".$row[4] ; ?> akan dilakukan ?');"title="Hapus" class="btn btn-info" ><i></i>Kembalikan</a>
							</td>
						</TR>
						<?php } ?>
					</form>
				</table>
           
		    </div>
		</div>
	</div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</html>