<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$uploaddir="img/"; //path
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
//Variabel POST
$upload=$_FILES['uploaded_file']['name'];
$name=$_POST['name'];
$user = $_POST['user'];
$pass = $_POST['password'];
$id = $_GET['id'];

$sql = mysqli_query($con,"UPDATE admin SET user='$user',password='$pass',fullname='$name',foto='$uploadfile'WHERE id='$id'");

 if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)){
 	$sql = mysqli_query($con,"UPDATE admin SET user='$user',password='$pass',fullname='$name',foto='$uploadfile'WHERE id='$id'");
  echo "Berhasil<br><a href='data-admin.php'>Kembali</a>";
 } else {
  echo "<script>alert('Update Gagal!');window.location='data-admin.php'</script>";
 }
mysqli_close($con);
?>