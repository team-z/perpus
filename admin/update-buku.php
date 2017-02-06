<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$judul=$_POST['nama'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$id = $_GET['id'];
$kode=$_POST['kode'];


$sql = mysqli_query($con,"UPDATE buku SET id_buku='$kode',judul_buku='$judul',penerbit='$penerbit',tahun_terbit='$tahun' WHERE id='$id'");

//UPDATE AKAN TERJADI BILA FOTO DIGANTI
 if ($sql){
  echo "Berhasil<br><a href='data-buku.php'>Kembali</a>";
 } else {
  echo "<script>alert('Update Gagal!');window.location='data-buku.php'</script>";
 }
mysqli_close($con);
?>