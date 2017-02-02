<?php
if (isset($_POST['login'])) {

include "koneksi.php";

$user=$_POST['user'];
$pass=$_POST['password'];

$sql=mysqli_query($link,"SELECT * FROM admin WHERE user= '$user' AND password='$pass'");
if (mysqli_num_rows($sql)==1) {
	session_start();
	$data=mysqli_fetch_array($sql);
	$_SESSION['user']=$data['user'];
	$_SESSION['fullname']=$data['fullname'];
	$_SESSION['password']=$data['password'];
	$_SESSION['foto']=$data['foto'];
	echo "<script>alert('Berhasil!');window.location='admin.php'</script>";
	header("location:admin.php");
}
}
?>