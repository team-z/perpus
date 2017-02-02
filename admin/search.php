<?php
include "admin/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background-color:#DCDCDC;">

<?php include "navbar.php" ?>
<div class="container-fluid">
<br><br><br><br><br>
   <div class="input-group">
    <span class="input-group-addon">Berita Hari Ini</span>
    <marquee class="form-control" scrollamount=14 style="font-family: arial;font-weight: bolder;"><?php echo $config['berita']; ?></marquee>
   </div>
	<div class="row">
       <div class="col-md-6">
        <div class="jumbotron" style="padding: 20px;">    
        <h2><i class="fa fa-book"></i> Baca Buku Online</h2>
          <div class="row">
          <h2>Buku 1</h2>
          <div class="col-md-3">
            <img src="img/coverbuku.png" class="img-responsive" style="height: 150px;">
          </div>
          <div class="col-md-9">
             <p>Ini Buku Online Pertama Kami , Klik Baca untuk membacanya secara online , atau klik download untuk dikirim ke e-mail kamu</p>
             <a href="" class="btn btn-md btn-primary"><i class="fa fa-eye"></i> Baca</a>
             <a href="" class="btn btn-md btn-success"><i class="fa fa-download"></i> Download</a>
          </div>
          </div>

          <div class="row">
          <h2>Buku 2</h2>
          <div class="col-md-3">
            <img src="img/cover2.png" class="img-responsive" style="height: 150px;">
          </div>
          <div class="col-md-9">
             <p>Ini Buku Online Pertama Kami , Klik Baca untuk membacanya secara online , atau klik download untuk dikirim ke e-mail kamu</p>
             <a href="" class="btn btn-md btn-primary"><i class="fa fa-eye"></i> Baca</a>
             <a href="" class="btn btn-md btn-success"><i class="fa fa-download"></i> Download</a>
          </div>
          </div>





           <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                 <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                 </li>
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">4</a></li>
                 <li class="page-item"><a class="page-link" href="#">5</a></li>
                 <li class="page-item"><a class="page-link" href="#">6</a></li>
                 <li class="page-item"><a class="page-link" href="#">7</a></li>
                 <li class="page-item"><a class="page-link" href="#">8</a></li>
                 <li class="page-item"><a class="page-link" href="#">9</a></li>
                 <li class="page-item"><a class="page-link" href="#">10</a></li>
                 <li class="page-item">
                 <a class="page-link" href="#">Next</a>
                 </li>
              </ul>
            </nav>
           </div>
       </div>

       <div class="col-md-6">
          <form>
          <div class="form-group">
             <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Search">
             <div class="input-group-btn">
                <button class="btn btn-info btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
             </div>
             </div>
           </div>
       </form>
       </div>
	</div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
</body>
</html>