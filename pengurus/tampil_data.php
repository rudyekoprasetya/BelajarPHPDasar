<?php
//buat session
if(!isset($_SESSION)) {
	session_start();
}

//jika ada orang yang masuk tanpa login
if(empty($_SESSION['username'])) {
	header("location: login.php");
}

//memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php');

//ambil data dari database
$query="SELECT * FROM tb_pengurus ORDER BY id ASC";
$data=mysqli_query($conn,$query);

// var_dump($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengurus</title>
</head>
<body>

<h1>Data Pengurus</h1>
<!-- <p>
	<a href="tampil_data.php">Pengurus</a>
	<a href="tampil_divisi.php">Divisi</a>
	<a href="logout.php">Keluar</a>
</p> -->
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Gender</th>
		<th>Gaji</th>
		<th>Aksi</th>
	</tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['gaji']; ?></td>
		<td>
			<a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> | 
			<a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>

		</td>
	</tr>
<?php 
 }
?>
</table>

<hr>

<h1>Input Data</h1>

<form method="post" action="simpan_data.php">
	<p>ID <input type="text" name="id" required="required"> </p>
	<p>Nama <input type="text" name="nama"> </p>
	<p>Alamat <textarea name="alamat"></textarea> </p>
	<p>Gender <input type="radio" name="gender" value="L"> Laki-laki 
	<input type="radio" name="gender" value="P"> Perempuan
	</p>
	<p>Gaji <input type="number" name="gaji"></p>
	<p>
		<button type="submit">Simpan</button>
		<button type="reset">Batal</button>
	</p>
</form>



</body>
</html>