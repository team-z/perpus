<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<?php include "navbar.php"; ?>
    <div id="wrapper">
    <?php include "sidebar.php";?>
    <div id="page-content-wrapper">
            <div class="container-fluid">
                <center><h1>Data Admin</h1></center> 
                <a href="daftar_anggota.html" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-plus"></i> Input Admin</a><br><br>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="warning"><center>No</center></th>
                        <th class="succes"><center>Foto</center></th>
                        <th class="danger"><center>Nama</center></th>
                        <th class=""><center>User</center></th>
                        <th class=""><center>Password</center>
                        <th class="warning"><center>Aksi</center></th>
                    </tr>
                    </thead>
                    <tbody>
                     <tr>
                     	<td align="center">1</td>
                     	<td align="center"><img src=""></td>
                     	<td align="center">Bella Mardiyani Sadewi</td>
                        <td align="center">bellamarsadewi</td>
                        <td align="center">12345</td>
                        <td align="center">
                            <a href="" class="btn btn-danger" onclick="return confirm ('Hapus Bella Mardiyani Sadewi ?');"title="Hapus">
                                <i class="glyphicon glyphicon-trash"></i> Hapus
                            </a>
                     		<a href="update-anggota.php" class="btn btn-md btn-success">
                     			<i class="glyphicon glyphicon-refresh"></i> Update
                     		</a>
                     	</td>
                     </tr>
                     <tr>
                         <td align="center">2</td>
                         <td align="center"><img src=""></td>
                         <td align="center">Nadia Atiqurrohmah</td>
                         <td align="center">nadiaatiq</td>
                         <td align="center">12345</td>
                         <td align="center">
                            <a href="" class="btn btn-danger" onclick="return confirm ('Hapus Bella Mardiyani Sadewi ?');"title="Hapus">
                                <i class="glyphicon glyphicon-trash"></i> Hapus
                            </a> 

                            <a href="update-anggota.php" class="btn btn-md btn-success">
                                <i class="glyphicon glyphicon-refresh"></i> Update
                            </a>
                        </td>
                     </tr>

                    </tbody>
                </table>
            </div>
        </div>
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar_menu.js"></script>

    </div>
</body>
</html>