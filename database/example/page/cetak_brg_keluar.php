	<?php
include("../config/koneksi.php");

//ambil id 
$id_keluar=$_GET['id_keluar'];

//query untuk menampilkan data 
$query="SELECT keluar.id_keluar, keluar.id_brg, barang.nama_barang, keluar.qty, keluar.tanggal FROM barang, keluar WHERE keluar.id_brg=barang.id_brg AND id_keluar='$id_keluar'";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Barang keluar</title>
</head>
<body onload="window.print()">
<center>
	<h4>Aplikasi GudangKU</h4>
</center>
<hr>
<table align="center">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>QTY</th>
	</tr>

	<?php 
do {
?>
          		<tr>
          			<td><?php echo $row['id_brg']; ?></td>
          			<td><?php echo $row['nama_barang']; ?></td>
          			<td align="right"><?php echo $row['qty']; ?></td>
          		</tr>
<?php
} while($row=mysql_fetch_assoc($data));
?>
</table>
<hr>
<br>
<p align="center">--TERIMA KASIH--</p>
</body>
</html>