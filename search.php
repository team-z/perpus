<?php 
include "admin/koneksi.php"; 
$sql=mysqli_query($link,"SELECT * FROM config");
$data=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php include "navbar.php"; ?>
    <br>

    <div class="row">
    <div class="col-md-3">
        <ul class="nav nav-pills navbar-inverse nav-stacked" style="background-color: black;">
        <li>
            
     <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Buku Disini ..">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
        </li>
            <li class="active"><a href="" style="color: white">Category</a></li>
            <li><a href="">Pemrograman Komputer</a></li>
            <li><a href="">Teknik Bisnis</a></li>
            <li><a href="">Multimedia</a></li>
            <li><a href="">Ilmu Agama</a></li>
            <li><a href="">Majalah</a></li>
            <li><a href="">Cerpen</a></li>
            <li><a href="">Novel</a></li>
            <li><a href="">Komik</a></li>

        </ul>
     </div>
<div class="container-fluid">
    <div class="col-md-9">
      <div class="jumbotron">
      <div class="container">
            <div class="input-group">
                  <span class="input-group-addon">Berita Hari Ini</span>
                     <marquee class="form-control" scrollamount="15"><?php echo $data['berita']; ?></marquee>
                  <span class="input-group-btn">
         </span>
       </div>
       </div>
      </div>
    </div>
</div>
    </div>

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
</body>

</html>
