<!DOCTYPE html>
<html>
<head>
	<title>Daftar Peminjam</title>
</head>
<body>
<center><h1>Daftar Peminjam</h1></center>
<table border="2" align="center">
	<form>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>JUDUL BUKU</th>
			<th>NAMA PEMINJAM</th>
			<th>TANGGAL PEMIJAMAN</th>
			<th>TANGGAL KEMBALI</th>
		</tr>
		<?php  
		include "koneksi.php";	
		$no=1;
		$result= mysqli_query($link, "SELECT * FROM pinjam");
		while ($row= mysqli_fetch_array($result)) {
		?>
		<TR>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row[0]; ?></td>

			<td><?php echo $row[1] ; ?></td>

			<td><?php echo $row[2]; ?></td>

			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><a href="delete-peminjam.php?id=<?php echo $row[0];?>" onclick="return confirm ('Apakah mengembalikan <?php echo $row[1]." ".$row[2]." ".$row[3]." ".$row[4] ; ?> akan dilakukan ?');"title="Hapus">Kembalikan</a> 
			</td>
		</TR>
		<?php } ?>
	</form>
</table>
</body>
</html>