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
                <div class="row">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>Clash Of Clans</h1>
                                <img src="../img/coc.png" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>Clash Of Royale</h1>
                                <img src="../img/cor.jpg" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>Let's Get Rich</h1>
                                <img src="../img/lgr.png" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>8Ball Pool</h1>
                                <img src="../img/8ball.png" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>Dragon City</h1>
                                <img src="../img/dc.png" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center>
                            <h1>Ninja Heroes</h1>
                                <img src="../img/ninja-heroes.png" height="200">
                            <label class="control-label">Jumlah Akun Yang Tersedia :</label>
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
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
