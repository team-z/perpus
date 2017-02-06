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
    <script>
            function tampilkanPreview(gambar,idpreview){
                var gb = gambar.files;
                for (var i = 0; i < gb.length; i++){
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
                        reader.readAsDataURL(gbPreview);
                    }else{
                        alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
                    }
                   
                }    
            }
        </script>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">

                <div class="jumbotron">
                <h1>Detail Buku</h1>
                <?php 
                include "koneksi.php";
                $id=$_GET['id'];
                $sql=mysqli_query($link,"SELECT * FROM buku WHERE id='$id'");
                $data=mysqli_fetch_array($sql);
                ?>
                <div class="row">
                <form enctype="multipart/form-data" method="post" action="update-buku.php?id=<?php echo $data[0]; ?>">
                  <div class="col-md-4">
                  <img id="preview" src="<?php echo $data['cover']; ?>" height="200" width="200" class="img-responsive" alt="User Image" style="border: 3px solid white;" />
                  </div>
                  <div class="col-md-8">
                  <table style="font-size: 20px;" class="table table-responsive table-bordered">
                    <tr>
                      <td>Id Buku</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['id_buku']; ?>" name="kode"></td>
                    </tr>
                    <tr>
                      <td>Judul Buku</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['judul_buku']; ?>" name="nama"></td>
                    </tr>
                    <tr>
                      <td>Genre Buku</td>
                      <td>
                         <input type="hidden" value="<?php echo $data['genre']; ?>" name="genre"><?php echo $data['genre']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Penerbit</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['penerbit']; ?>" name="penerbit"></td>
                    </tr>
                    <tr>
                      <td>Tahun Terbit</td>
                      <td><input type="text" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" name="tahun"></td>
                    </tr>
                    <tr>
                      <td colspan="2"><button type="submit" class="btn btn-danger btn-block">Save Changes</button></td>
                    </tr>
                  </table>
                  </div>
                </div><br>
                <a href="data-buku.php">Kembali</a>
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
