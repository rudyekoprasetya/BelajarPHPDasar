<?php
//memasukan koneksi 
include("koneksi.php");
// require_once("koneksi.php");

//query untuk menampilkan data
$query="SELECT * FROM pengurus ORDER BY id ASC";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());

//menampilkan data dalam array
$row=mysql_fetch_assoc($data);

?>


<h2>Data Pengurus Komunitas</h2>
 <table border="1" class="table table-hover">
	<tr bgcolor="lavender">
		<th>ID</th>
		<th>NAMA</th>
		<th>GENDER</th>
		<th>ALAMAT</th>
		<th>GAJI</th>
		<th>AKSI</th>
	</tr> 
<?php 
 do {
?>		
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['gaji']; ?></td>
		<td><a href="?page=edit_data&id=<?php echo $row['id']; ?>">EDIT</a> | <a href="?page=hapus_data&id=<?php echo $row['id']; ?>">DELETE</a></td>
	</tr>
<?php 
	} while($row=mysql_fetch_assoc($data));
?>
 </table>
<hr>
<br>
<form method="POST" action="?page=simpan_data">
	<p>ID</p>
	<p><input type="text" name="id" class="form-control"></p>
	<p>NAMA</p>
	<p><input type="text" name="nama" class="form-control"></p>
	<p>GENDER</p>
	<p><select name="gender" class="form-control">
		<option value="L">Laki-laki</option>
		<option value="P">Perempuan</option>
	</select></p>
	<p>ALAMAT</p>
	<p><textarea name="alamat" class="form-control"></textarea></p>
	<p>GAJI</p>
	<p><input type="number" name="gaji" class="form-control"></p>
	<p>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary"> 
		<input type="reset" name="batal" value="batal" class="btn btn-danger">
	</p>
</form>
