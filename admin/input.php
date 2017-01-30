<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$user=$_POST['user'];
$pass=$_POST['password'];
$name=$_POST['name'];
// Perform queries 
$q = mysqli_query($con,"INSERT INTO administrator (id,user,password,fullname) VALUES (NULL,'$user','$pass','$name')");
if ($q) {
	echo "<script>alert('Input Admin Berhasil!');window.location='data-admin.php'</script>";
}else{
    echo "<script>alert('Input Admin Gagal!');window.location='input-admin.php'</script>";
}
mysqli_close($con);
?>