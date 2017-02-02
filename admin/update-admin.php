<?php
$id=$_GET['id'];
$link = mysqli_connect("localhost", "root", "", "library");
$result = mysqli_query($link, "SELECT * FROM admin where id='$id'");
$row=mysqli_fetch_array($result);
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
                <center><h1>Update Admin</h1></center> 
<form enctype="multipart/form-data" method="post" action="update.php?id=<?php echo $row[0];?>">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
  <div class="form-group">
    <label for="user">User Baru</label>
    <input type="text" class="form-control" placeholder="User Baru" name="user">
  </div>
  <div class="form-group">
    <label for="user">Nama Lengkap Baru</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap Baru" name="name">
  </div>
  <div class="form-group">
    <label for="password">Password Baru</label>
    <input type="password" class="form-control" placeholder="Password Baru" name="password">
  </div>
  <div class="form-group">
    <label for="fullname">Upload Foto</label><br>
    <img id="preview" src="" alt="" width="200px"/><br><br>
    <input accept="image/*" class="input"  onchange="tampilkanPreview(this,'preview')" type="file" name="uploaded_file">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
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
