<?php
//memasukan koneksi 
include("koneksi.php");
// require_once("koneksi.php");

//query untuk menampilkan data
$query="SELECT * FROM gambar ORDER BY id ASC";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());

//menampilkan data dalam array
$row=mysql_fetch_assoc($data);

?>

<h2>Data Gambar Komunitas</h2>
 <table border="1" class="table table-hover">
	<tr bgcolor="lavender">
		<th>ID</th>
		<th>GAMBAR</th>
		<th>AKTIF</th>
		<th>AKSI</th>
	</tr> 
<?php 
 do {
?>		
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['gambar']; ?></td>
		<td><?php echo $row['status']; ?></td>
		<td><a href="">EDIT</a> | <a href="">DELETE</a></td>
	</tr>
<?php 
	} while($row=mysql_fetch_assoc($data));
?>
 </table>
 <br>
 <h2>Upload File Gambar</h2>
 
<form method="POST" action="?page=simpan_gambar" enctype="multipart/form-data"> 
	<p>NAMA</p>
	<p><input type="file" name="gambar" class="form-control"></p>
	<p>AKTIF</p>
	<p><select name="status" class="form-control">
		<option value="yes">YES</option>
		<option value="no">NO</option>
	</select></p>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary"> 
		<input type="reset" name="batal" value="batal" class="btn btn-danger">
	</p>
</form>
