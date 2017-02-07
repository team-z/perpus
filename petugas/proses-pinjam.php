<?php  

include "koneksi.php";

$kode=$_POST['kode'];
$judul=$_POST['judul'];
$nama=$_POST['peminjam'];
$tglpinjam=$_POST['tanggalpinjam'];
$tglkembali=$_POST['tanggalkembali'];

if ($data=mysqli_query($link, "INSERT INTO pinjam (id, judul_buku, nama_peminjam, tanggal_pinjam, tanggal_kembali) VALUES ('$kode','$judul','$nama','$tglpinjam','$tglkembali')")) {
		header("location: daftar-peminjam.php");
} else {
	echo "Error :".mysqli_error($link);
}
mysqli_close($link);
?>