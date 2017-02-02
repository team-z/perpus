<?php

$a=rand(99999,112890);

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
                <center><h1>Input Petugas</h1></center> 
<form enctype="multipart/form-data" method="post" action="input_petugas.php">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
  <div class="form-group">
    <label for="user">Kode Petugas</label>
    <input type="hidden" name="nomor" value="<?php echo $a;?>"><?php echo $a;?><br>
    <a href="input-petugas.php"><span class="glyphicon glyphicon-refresh"></span> Refresh Kode</a>
  </div>
  <div class="form-group">
    <label for="fullname">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" name="fullname">
  </div>
  <div class="form-group">
    <label for="password">TTL</label>
    <input type="date" class="form-control" name="ttl">
  </div>
  <div class="form-group">
    <label for="fullname">Tempat Lahir</label>
    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat">
  </div>
  <div class="form-group">
    <label for="fullname">No.Telp</label>
    <input type="text" class="form-control" name="no" placeholder="Nomor Telepon">
  </div>
  <div class="form-group">
    <label for="fullname">Alamat</label>
    <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="fullname">Upload Foto</label><br>
    <img id="preview" src="" alt="" width="200px"/><br><br>
    <input accept="image/*" class="input"  onchange="tampilkanPreview(this,'preview')" type="file" name="uploaded_file">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
</form>
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
