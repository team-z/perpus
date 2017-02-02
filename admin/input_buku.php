<?php
include "koneksi.php";
$uploaddir="img/"; //path
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
//Variabel POST
$upload=$_FILES['uploaded_file']['name'];
$id=$_POST['id'];
$judul=$_POST['judul'];
$penerbit=$_POST['penerbit'];
$tahun=$_POST['tahun'];
$genre=$_POST['genre'];

if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)) {
$res=mysqli_query($link , "INSERT INTO buku(id,id_buku,judul_buku,genre,penerbit,tahun_terbit,cover) VALUES
    (NULL,'$id','$judul','$genre','$penerbit','$tahun','$uploadfile')") or die (mysqli_error());
	echo "Berhasil<br><a href=input-buku.php>Input Lagi</a>";
}else{
	echo "failed";
}


?>