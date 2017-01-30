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
<form method="post" action="update.php?id=<?php echo $row[0];?>">
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
