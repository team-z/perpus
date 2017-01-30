<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_GET['id'];
$sql = mysqli_query($con,"DELETE FROM administrator where id='$id'");
if ($sql) {
	echo "<script>alert('Hapus Berhasil!');window.location='data-admin.php'</script>";
}else{
    echo "<script>alert('Hapus Gagal!');window.location='data-admin.php'</script>";
}
mysqli_close($con);
?>