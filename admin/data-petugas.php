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
</head>

<body>
    <?php include "navbar.php"; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <center><h1>Data Petugas</h1></center> 
                <a href="input-petugas.php" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-plus"></i> Input Petugas</a><br><br>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Foto</center></th>
                        <th><center>Nomor Petugas</center></th>
                        <th><center>Fullname</center></th>
                        <th><center>Aksi</center></th>
                    </tr>
                    </thead>
                    <tbody>
<?php
$link = mysqli_connect("localhost", "root", "", "library");
$no=1;
$result = mysqli_query($link, "SELECT * FROM petugas");
while ($row=mysqli_fetch_array($result))
{
?>
                     <tr>
                     	<td align="center"><?php echo $no++;?></td>
                        <td align="center">
                        <img class="img-circle" height="100" width="100" src="<?php echo $row['foto']; ?>">
                        </td>
                        <td align="center"><?php echo $row[1];?></td>
                     	<td align="center"><?php echo $row[2];?></td>
                     	<td align="center">
                            <a href="detail-petugas.php?id=<?php echo $row[0];?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-eye-open"></i> Detail
                            </a>

                            <a href="delete-petugas.php?id=<?php echo $row[0];?>" class="btn btn-danger" onclick="return confirm ('Hapus <?php echo $row[2];?> ?');"title="Hapus">
                                <i class="glyphicon glyphicon-trash"></i> Hapus
                            </a> 
                     	</td>
                     </tr>

                    </tbody>
<?php } ?>
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
