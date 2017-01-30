<?php
include "koneksi.php";

$berita=$_POST['berita'];
$sql=mysqli_query($link,"UPDATE config SET berita = '$berita' ");
if ($sql) {
	header("location:admin.php");
}

?>