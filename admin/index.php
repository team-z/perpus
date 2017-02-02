<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{background-color: rgba(255,255,255,0);color: white;}
	</style>
</head>
<body style="background: url('../img/admin-login.jpg');background-size: cover;font-family: 'Raleway',sans-serif;">
<br><br><br><br><br>
   <div class="container">
     <div class="row">
        <div class="col-md-8">
   	        <div class="jumbotron">
   		       <h1>Selamat Datang Di Login Admin</h1>
   		       <p>Untuk mengakses halaman admin silahkan masukkan user dan password anda , belum tergabung ? silahkan tanyakan pada admin untuk didaftarkan</p>
   	        </div>
         </div>

         <div class="col-md-4">
           <div class="jumbotron" style="background-color: rgba(255,226,198,0.4);">
           <h1>Login</h1>
         	 <form class="form-horizontal" method="post" action="cek-log.php">
               <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Username" name="user" required="">
               </div>

               <div class="form-group">
                <input type="password" class="form-control input-lg" placeholder="Password" name="password" required="">
               </div>

               <div class="form-group">
                <input type="submit" class="btn btn-block btn-lg btn-default" value="Login" name="login">
               </div>
         	 </form>
           </div>
         </div>
     </div>
   </div>

  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
    <div class="navbar-brand">
    <p>Created By Team-Z</p>
    </div>
     <ul class="nav navbar-nav navbar-right">
         <li><a href="../">Kembali Ke Halaman Utama</a></li>
     </ul>
    </div>
  </div>
</body>
</html>