<?php  

include "koneksi.php";

$id=$_GET['id'];

if ($data=mysqli_query($link, "DELETE FROM pinjam WHERE id='$id'")) {
	echo "<script>alert('Sudah Dikembalikan!');window.location='daftar-peminjam.php'</script>";
} else {
	echo "<script>alert('Belum Mengembalikan!');window.location='daftar-peminjam.php'</script>";
}
?>