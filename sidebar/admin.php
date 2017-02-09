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
    <link rel="stylesheet" href="admin.css">
</head>
<body class="body">
    <nav class="navbar navbar-default no-margin">

                <div class="navbar-header fixed-brand ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> Baca Buku Online</a>        
                </div><!-- navbar-header-->

                

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                                  <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
                </div>
                </div>
                <!-- bs-example-navbar-collapse-1 -->

    </nav>
    <div id="wrapper">
        <?php include "sidebar.php"; ?>
       <div id="page-content-wrapper">
            <div class="container-fluid xyz">
    <div class="row">

            <div class="col-md-10">
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
