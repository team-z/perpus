<?php
include "koneksi.php";
$uploaddir="img/"; //path
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
//Variabel POST
$upload=$_FILES['uploaded_file']['name'];
$fullname=$_POST['fullname'];
$ttl=$_POST['ttl'];
$tempat=$_POST['tempat'];
$no=$_POST['no'];
$alamat=$_POST['alamat'];
$nomor=$_POST['kode'];

if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)) {
$res=mysqli_query($link , "INSERT INTO anggota(id,nomor_anggota,nama,ttl,tempat_lahir,alamat,no_telp,foto) VALUES
    (NULL,'$nomor','$fullname','$ttl','$tempat','$alamat','$no','$uploadfile')") or die (mysqli_error());
	echo "Berhasil<br><a href=input-anggota.php>Input Lagi</a>";
}else{
	echo "failed";
}


?>