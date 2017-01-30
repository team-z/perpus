<?php
include "koneksi.php";
$uploaddir="img/"; //path
$uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);
$upload=$_FILES['uploaded_file']['name'];
$user= $_POST['user'];
$password=$_POST['password'];
$name=$_POST['name'];
if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadfile)) {
			$res=mysqli_query($link , "INSERT INTO admin(id,user,password,fullname,foto) VALUES
            (NULL,'$user','$password','$name','$uploadfile')") or die (mysqli_error());
	echo "Berhasil<br><a href=input-admin.php>Input Lagi</a>";
}else{
	echo "failed";
}


?>