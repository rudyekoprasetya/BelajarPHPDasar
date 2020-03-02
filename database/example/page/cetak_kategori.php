<?php
include('../config/koneksi.php');
//query untuk menampilkan data 
$query="SELECT * FROM kategori";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>
<html>
<head>
	<title>Cetak Kategori</title>
</head>
<body onload="window.print()">
	<center>
		<h1>Data Kategori</h1>
		<h2>Aplikasi GudangKU</h2>
	</center>
	<hr>
	<br>
	<table border="2" align="center">
		<tr bgcolor="red">
			<th>ID</th>
			<th>Nama Kategori</th>
			<th>Status</th>
		</tr>	
	<?php 
	do {
	?>
		<tr>
			<td><?php echo $row['id_kat']; ?></td>
			<td><?php echo $row['nama_kat']; ?></td>
			<td><?php echo $row['status']; ?></td>
		</tr>
	<?php
	} while($row=mysql_fetch_assoc($data));
	?>
	</table>
	<b>
	<p align="right">
	Kediri, <?php echo date('D M Y'); ?>
	</p>
	<br><br>
	<p align="right">
		<u>Admin GudangKu.com</u>
	</p>
	</b>
</body>
</html>