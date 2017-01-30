<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name=$_POST['name'];
$user = $_POST['user'];
$pass = $_POST['password'];
$id = $_GET['id'];

$sql = mysqli_query($con,"UPDATE admin SET user='$user',password='$pass',fullname='$name' WHERE id='$id'");
 if ($sql){
  echo "<script>alert('Update Berhasil!');window.location='data-admin.php'</script>";
 } else {
  echo "<script>alert('Update Berhasil!');window.location='data-admin.php'</script>";
 }
mysqli_close($con);
?>