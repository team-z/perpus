<?php
session_start();
if (empty($_SESSION['fullname'])) {
	header("location:../login.php");
}else{
 include "koneksi.php"; 
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
              <div class="jumbotron">
              <h1>Profiles</h1><br>
              <div class="row">
                <div class="col-md-4">
                 <img class="img-circle" height="250" width="250" src="<?php echo $_SESSION['foto']; ?>">
                </div>
                <div class="col-md-8">
                  <table class="table table-bordered" style="font-size:30px;">
                  <tr>
                    <td>Nama</td>
                    <td><?php echo $_SESSION['fullname']; ?></td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td><?php echo $_SESSION['ttl']; ?></td>
                  </tr>
                  <tr>
                     <td>Tempat Lahir</td>
                     <td><?php echo $_SESSION['tempat_lahir']; ?></td>
                  </tr>
                  <tr>
                     <td>Nomor Telpon</td>
                     <td><?php echo $_SESSION['no_telp']; ?></td>
                  </tr>
                  <tr>
                     <td>Alamat</td>
                     <td><?php echo $_SESSION['alamat']; ?></td>
                  </tr>
                  </table>
                </div>
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