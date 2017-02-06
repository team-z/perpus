<?php
include "koneksi.php";
$uploaddir="../petugas/img/"; //path
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
//Variabel POST
$upload=$_FILES['uploaded_file']['name'];
$kode=$_POST['nomor'];
$fullname=$_POST['fullname'];
$ttl=$_POST['ttl'];
$tempat=$_POST['tempat'];
$no=$_POST['no'];
$alamat=$_POST['alamat'];

if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)) {
$res=mysqli_query($link , "INSERT INTO petugas(id,nomor_verifikasi,fullname,ttl,tempat_lahir,no_telp,alamat,foto) VALUES
    (NULL,'$kode','$fullname','$ttl','$tempat','$no','$alamat','$uploadfile')") or die (mysqli_error());
	echo "Berhasil<br><a href=input-petugas.php>Input Lagi</a>";
}else{
	echo "failed";
}


?>