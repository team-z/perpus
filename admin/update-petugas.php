<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$fullname=$_POST['fullname'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$id = $_GET['id'];
$alamat=$_POST['alamat'];
$nomor=$_POST['nomor'];

$sql = mysqli_query($con,"UPDATE petugas SET fullname='$fullname',ttl='$tanggal',tempat_lahir='$tempat',no_telp='$nomor',alamat='$alamat' WHERE id='$id'");

 if ($sql){
  echo "Berhasil<br><a href='data-petugas.php'>Kembali</a>";
 } else {
  echo "<script>alert('Update Gagal!');window.location='data-petugas.php'</script>";
 }
mysqli_close($con);
?>