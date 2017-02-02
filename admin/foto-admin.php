<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cara Membuat upload preview dengan javascript</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
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
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <center><h1>Tambahkan Foto</h1>
        <form id="myForm" action="upload-admin.php" method="post" enctype="multipart/form-data">
        <img id="preview" src="" alt="" width="200px"/><br><br>
            <input type="file" name="file" class="input" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
            <input type="submit" class="btn btn-success btn-lg" value="Upload" /><br/>
            <!--untuk menampilkan file gambar yang telah di upload-->
            
        </form>
        </center> 
     </div>
     </div>
     </div>
     <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar_menu.js"></script>
    </body>
</html>