<?php
include "koneksi.php";

$search = $_POST['search'];
$sql=mysqli_query($link,"SELECT * FROM buku WHERE judul_buku LIKE '%$search%' || genre LIKE '%$search%' || id_buku LIKE '%$search%' || penerbit LIKE '%$search%' || tahun_terbit LIKE '%$search%'");
if ($sql) {
	# code...
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body style="font-family: 'Raleway', sans-serif;">
    <?php include "navbar.php"; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <center><h1>Data Buku</h1></center><br>
                <div class="row">
                <div class="col-md-3">
                <a href="input-buku.php" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-plus"></i> Input Buku</a>
                </div>
                <div class="col-md-9">
                <form role="search" method="post" action="search-buku.php">
                   <div class = "input-group">
               <input type = "text" class = "form-control input-lg" placeholder="Cari Buku ..." name="search">
               
               <span class = "input-group-btn">
                  <button class = "btn btn-default btn-lg" type = "submit">
                     Cari!
                  </button>
               </span>
               </form>
            </div>
                </div>
                </div><br>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Cover</center></th>
                        <th><center>Nama Buku</center></th>
                        <th><center>Aksi</center></th>
                    </tr>
                    </thead>
                    <tbody>
<?php
include "koneksi.php";
$search = $_POST['search'];
$sql=mysqli_query($link,"SELECT * FROM buku WHERE judul_buku LIKE '%$search%' || genre LIKE '%$search%' || id_buku LIKE '%$search%' || penerbit LIKE '%$search%' || tahun_terbit LIKE '%$search%'");
if ($sql) {
 $no=1;
 while ($row=mysqli_fetch_array($sql))
{
?>
                     <tr>
                     	<td align="center"><?php echo $no++;?></td>
                        <td align="center">
                            <img src="<?php echo $row[6];?>" class = "img-responsive" height="50" width="50">
                        </td>
                     	<td align="center"><strong><?php echo $row[2];?></strong></td>
                     	<td align="center">
                            <a href="delete-buku.php?id=<?php echo $row[0];?>" class="btn btn-danger" onclick="return confirm ('Hapus <?php echo $row[2];?> ?');"title="Hapus">
                                <i class="fa fa-trash fa-stack"></i> Hapus
                            </a> 
                            <a href="detail-buku.php?id=<?php echo $row[0];?>" class="btn btn-info">
                                <i class="fa fa-eye fa-stack"></i> Detail
                            </a>
                     	</td>
                     </tr>

                    </tbody>
<?php } } ?>
                </table>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar_menu.js"></script>
</body>

</html>

