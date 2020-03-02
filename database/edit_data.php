<?php
include('koneksi.php');

$id=$_GET['id']; //ambil id yang akan diedit

//query untuk cari data berdasarkan ID
$query="SELECT * FROM pengurus WHERE id = '$id'";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());

//masukan data dalam array
$row=mysql_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Pengurus</title>
</head>
<body>
<h2>Edit Data Pengurus Komunitas</h2>

<form method="POST" action="?page=ubah_data">
	<p>ID</p>
	<p><input type="text" name="id" value="<?php echo $row['id']; ?>" class="form-control"></p>
	<p>NAMA</p>
	<p><input type="text" name="nama" value="<?php echo $row['nama']; ?>" class="form-control"></p>
	<p>GENDER</p>
	<p><select name="gender" class="form-control">
		<option value="L" <?php if(!strcmp($row['gender'], 'L')) {echo "SELECTED";} ?> >Laki-laki</option>
		<option value="P" <?php if(!strcmp($row['gender'], 'P')) {echo "SELECTED";} ?>>Perempuan</option>
	</select></p>
	<p>ALAMAT</p>
	<p><textarea name="alamat" class="form-control"><?php echo $row['alamat']; ?></textarea></p>
	<p>GAJI</p>
	<p><input type="number" name="gaji" value="<?php echo $row['gaji']; ?>" class="form-control"></p>
	<p>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary"> 
		<input type="reset" name="batal" value="batal" class="btn btn-danger">
	</p>
</form>
</body>
</html>