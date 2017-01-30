<?php include "koneksi.php"; 
$sql= mysqli_query($link,"SELECT * FROM config");
$config=mysqli_fetch_array($sql);
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
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
        body{font-family: "Raleway",sans-serif;}
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">

                <div class="row">
                    <div class="col-md-4">
                      <div class="jumbotron">
                       <h3>
                       <i class="fa fa-book fa-stack"></i> Jumlah Buku & Alat :
                        </h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="jumbotron">
                       <h3>
                       <i class="fa fa-user fa-stack"></i> Jumlah Anggota :
                        </h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="jumbotron">
                       <h3>
                       <i class="fa fa-user fa-stack"></i> Jumlah Petugas :
                        </h3>
                      </div>
                    </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">Berita Hari Ini</span>
                     <marquee class="form-control" scrollamount=14 style="font-family: arial;font-weight: bolder;"><?php echo $config['berita']; ?></marquee>
                  <span class="input-group-btn">
                  <a href="#myModal" class="btn btn-default" data-toggle="modal"><i class="fa fa-wrench"></i></a>
                  </span>
                </div><br>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rubah Berita</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="berita.php">
        <div class="form-group">
        <textarea name="berita" class="form-control" placeholder="Masukkan Berita Baru ..."></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-block btn-success">Muat Berita</button>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                
               <div class="row">
                <div class="col-md-4">
                  <div class="panel panel-warning">
                   <div class="panel-heading">
                    <h2>Notification</h2>
                   </div>
                   <div class="panel-body">
                     <?php
                     include "koneksi.php";
                     $sql=mysqli_query($link,"SELECT * from admin order by id desc limit 1");
                     while($row= mysqli_fetch_array($sql))
                     {
                    ?>
                    <div class="alert alert-success">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="fa fa-times"></i>
                      </button>
                    <strong><?php echo $row['fullname']; ?></strong>, Telah ditambahkan menjadi admin PerPusWeb yang baru. 
                    </div>
                    <?php } ?>
                   </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-success">
                   <div class="panel-heading">
                    <h2>Inventory Masuk</h2>
                   </div>
                   <div class="panel-body">
                     
                   </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-info">
                   <div class="panel-heading">
                    <h2>Buku Terkini</h2>
                   </div>
                   <div class="panel-body">
                     
                   </div>
                  </div>
                </div>

               </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar_menu.js"></script>
</body>

</html>
