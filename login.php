<html>
<head>
  <title>Welcome</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background:url('img/5.jpg');font-family: 'Raleway',sans-serif;">
<br><br><br><br>
<div class="container">
 <div class="row">
 <div class="col-md-4">
 </div>
 <div class="col-md-4">
 <div class="jumbotron" style="background-color: rgba(255,255,255,0.3);">
 <center>
  <img src="img/user.png" class="img-responsive" style="height: 150px;">
  <h2>Login Petugas</h2>
  <form method="post" action="cek-log.php">
    <div class="form-group">
      <input type="text" class="form-control input-lg" name="kode" placeholder="Masukkan Nomor Petugas">
    </div>
    <div class="form-group">
    <input type="submit" name="login" value="LOGIN" class="btn btn-login btn-block btn-lg btn-success"><br> 
    <p>Lupa Nomor Petugas? Hubungi Admin Anda</p><br>
    <a href="index.html">Kembali ke Halaman Utama</a>
  </form>
  </center>
  </div>
  </div>
  <div class="col-md-4">
 </div>
  </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
</body>
</html>