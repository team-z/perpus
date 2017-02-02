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
                <h1>Detail Anggota</h1>
                <?php 
                include "koneksi.php";
                $id=$_GET['id'];
                $sql=mysqli_query($link,"SELECT * FROM anggota WHERE id='$id'");
                $data=mysqli_fetch_array($sql);
                ?>
                <div class="row">
                <form enctype="multipart/form-data" method="post" action="update-anggota.php?id=<?php echo $data[0]; ?>">
                  <div class="col-md-4">
                  <img id="preview" src="<?php echo $data['foto']; ?>" height="200" width="200" class="img-circle" alt="User Image" style="border: 3px solid white;" />
                  </div>
                  <div class="col-md-8">
                  <table style="font-size: 20px;" class="table table-responsive table-bordered">
                    <tr>
                      <td>Nomor Anggota</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['nomor_anggota']; ?>" name="kode"></td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['nama']; ?>" name="nama"></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td><input class="form-control" type="date" value="<?php echo $data['ttl']; ?>" name="tanggal"></td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir</td>
                      <td><input class="form-control" type="text" value="<?php echo $data['tempat_lahir']; ?>" name="tempat"></td>
                    </tr>
                    <tr>
                      <td>No.Telp</td>
                      <td><input type="text" class="form-control" value="<?php echo $data['no_telp']; ?>" name="nomor"></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><textarea class="form-control" value="<?php echo $data['alamat']; ?>" name="alamat"><?php echo $data['alamat']; ?></textarea></td>
                    </tr>
                    <tr>
                      <td colspan="2"><button type="submit" class="btn btn-danger btn-block">Save Changes</button></td>
                    </tr>
                  </table>
                  </div>
                </div><br>
                <a href="data-anggota.php">Kembali</a>
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
