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
                <style type="text/css">
            form{width: 310px; margin: auto;} 
            .input{background: #F0FFF3; color: black; cursor: pointer;}
        </style>
</head>

<body>
    <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> AdminPanel</a>        
                </div><!-- navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <center><h1>Input Buku</h1></center> 
<form enctype="multipart/form-data" method="post" action="input_buku.php">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
  <div class="form-group">
    <label for="user">Id_Buku</label>
    <input type="text" class="form-control" placeholder="Id Buku" name="id">
  </div>
  <div class="form-group">
    <label for="password">Judul Buku</label>
    <input type="text" class="form-control" placeholder="Judul Buku" name="judul">
  </div>
  <div class="form-group">
    <label for="password">Genre Buku</label>
    <select name="genre" class="form-control">
    	<option value="Pemrograman Komputer">Pemrograman Komputer</option>
    	<option value="Multimedia">Multimedia</option>
    	<option value="Teknik Bisnis">Teknik Bisnis</option>
    	<option value="Ilmu Agama">Ilmu Agama</option>
    	<option value="Majalah">Majalah</option>
    	<option value="Cerpen">Cerpen</option>
    	<option value="Novel">Novel</option>
    	<option value="Komik">Komik</option>
    </select>
  </div>
  <div class="form-group">
    <label for="fullname">Penerbit</label>
    <input type="text" class="form-control" placeholder="Penerbit" name="penerbit">
  </div>
  <div class="form-group">
    <label for="fullname">Tahun Terbit</label>
    <input type="text" class="form-control" placeholder="Tahun Terbit" name="tahun">
  </div>
  <div class="form-group">
    <label for="fullname">Cover Buku</label><br>
    <img id="preview" src="" alt="" width="200px"/><br><br>
    <input accept="image/*" class="input"  onchange="tampilkanPreview(this,'preview')" type="file" name="uploaded_file">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Buku</button>
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
