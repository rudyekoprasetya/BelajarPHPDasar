	<?php
include("../config/koneksi.php");

//ambil id 
$id_masuk=$_GET['id_masuk'];

//query untuk menampilkan data 
$query="SELECT masuk.id_masuk, masuk.id_brg, barang.nama_barang, masuk.qty, masuk.tanggal FROM barang, masuk WHERE masuk.id_brg=barang.id_brg AND id_masuk='$id_masuk'";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Barang Masuk</title>
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