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
</head>
<body>
    <?php include "navbar.php"; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                 <h1>Settings</h1>
                <div class="jumbotron">
                 <div class="row">

                  <div class="col-md-4">
                   <form class="form-horizontal">
                     <div class="form-group">
                     <label>Biaya Denda per Hari :</label>
                     <input class="form-control input-sm" type="text" name="">
                     </div>

                     <div class="form-group">
                     <label>Tenggat Waktu Peminjaman (maksimal 99 Hari) :</label>
                     <input class="form-control input-sm" type="text" name="">
                     </div>
                     
                   </form>
                   </div>

                  </div>
                 </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar_menu.js"></script>
</body>
</html>