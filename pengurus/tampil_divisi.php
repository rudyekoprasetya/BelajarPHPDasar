<?php
//memanggil file koneksi
require_once('koneksi.php');
require_once('keamanan.php');
// include('koneksi.php');

//ambil data dari database
$query="SELECT tb_divisi.kode_divisi, tb_divisi.nama_divisi, tb_divisi.tunjangan, tb_divisi.id, tb_pengurus.nama FROM tb_divisi, tb_pengurus WHERE tb_divisi.id = tb_pengurus.id";
$data=mysqli_query($conn,$query);

// var_dump($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengurus</title>
</head>
<body>

<h1>Data Divisi</h1>
<p>
	<a href="tampil_data.php">Pengurus</a>
	<a href="tampil_divisi.php">Divisi</a>
	<a href="logout.php">Keluar</a>
</p>
<table border="1">
	<tr>
		<th>Kode</th>
		<th>Divisi</th>
		<th>Tunjangan</th>
		<th>Nama Pengurus</th>

	</tr>
<?php
 while($row=mysqli_fetch_assoc($data)){
?>
	<tr>
		<td><?php echo $row['kode_divisi']; ?></td>
		<td><?php echo $row['nama_divisi']; ?></td>
		<td><?php echo $row['tunjangan']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		
	</tr>
<?php 
 }
?>
</table>

<hr>

<h1>Input Data</h1>

<form method="post" action="simpan_divisi.php">
	<p>Kode Divisi <input type="text" name="kode_divisi" required="required"> </p>
	<p>Nama Divisi <input type="text" name="nama_divisi"> </p>
	<p>Tunjangan <input type="number" name="tunjangan"></p>
	<p>ID Pengurus
	<select name="id">
<?php
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);

while($row_pengurus=mysqli_fetch_assoc($data_pengurus)){
?>
		<option value="<?php echo $row_pengurus['id'] ?>"><?php echo $row_pengurus['nama']; ?></option>

<?php
}
?>
	</select>
	</p>
	<p>
		<button type="submit">Simpan</button>
		<button type="reset">Batal</button>
	</p>
</form>

</body>
</html>