<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$nama=$_POST['nama'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$id = $_GET['id'];
$alamat=$_POST['alamat'];
$nomor=$_POST['nomor'];
$kode=$_POST['kode'];


$sql = mysqli_query($con,"UPDATE anggota SET nomor_anggota='$kode',nama='$nama',ttl='$tanggal',tempat_lahir='$tempat',no_telp='$nomor',alamat='$alamat' WHERE id='$id'");

//UPDATE AKAN TERJADI BILA FOTO DIGANTI
 if ($sql){
  echo "Berhasil<br><a href='data-anggota.php'>Kembali</a>";
 } else {
  echo "<script>alert('Update Gagal!');window.location='data-anggota.php'</script>";
 }
mysqli_close($con);
?>