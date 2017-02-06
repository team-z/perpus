<?php
if (isset($_POST['login'])) {

include "petugas/koneksi.php";

$user=$_POST['kode'];


$sql=mysqli_query($link,"SELECT * FROM petugas WHERE nomor_verifikasi= '$user'");
if (mysqli_num_rows($sql)==1) {
	$data=mysqli_fetch_array($sql);
	session_start();
	$_SESSION['fullname']=$data['fullname'];
	$_SESSION['foto']=$data['foto'];
	$_SESSION['ttl']=$data['ttl'];
	$_SESSION['tempat_lahir']=$data['tempat_lahir'];
	$_SESSION['no_telp']=$data['no_telp'];
	$_SESSION['alamat']=$data['alamat'];
	echo "<script>alert('Berhasil!');window.location='petugas/index.php'</script>";
	header("location:petugas/index.php");
}
}
?>