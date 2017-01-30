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

                <div class="jumbotron">
                <h1>Detail Admin</h1>
                <div class="row">
                  <div class="col-md-4">
                  <img src="<?php echo $_SESSION['foto']; ?>" height="200" width="200" class="img-circle" alt="User Image" style="border: 3px solid white;" />
                  </div>
                  <div class="col-md-8">
                  <table style="font-size: 35px;" class="table table-responsive table-bordered">
                    <tr>
                      <td>Fullname</td>
                      <td><?php echo $_SESSION['fullname']; ?></td>
                    </tr>
                    <tr>
                      <td>Username</td>
                      <td><?php echo $_SESSION['user']; ?></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><?php echo $_SESSION['password']; ?></td>
                    </tr>
                  </table>
                  </div>
                </div><br>
                <a href="admin.php">Kembali</a>
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
