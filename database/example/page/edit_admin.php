<?php
//ambil data id_admin
$id_admin=$_GET['id_admin'];
//query
$query="SELECT * FROM admin WHERE id_admin='$id_admin'";
$data=mysql_query($query) or die(mysql_error());
//data
$row=mysql_fetch_assoc($data);
?>


<div class="row panel panel-success">
	<h3 class="panel-heading">Edit Data</h3>
	<div class="col-lg-12 panel-body">
		<form action="?page=page/ubah_admin" method="POST">
			<label>ID</label>
			<input type="text" name="id_admin" class="form-control" value="<?php echo $row['id_admin']; ?>" readonly>
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="aktif" <?php if (!(strcmp($row['status'], "aktif"))) {echo "SELECTED";}?>>AKTIF</option>
				<option value="tidak" <?php if (!(strcmp($row['status'], "tidak"))) {echo "SELECTED";}?>>TIDAK AKTIF</option>
			</select>
			<br><br>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<a href="?page=page/data_admin" class="btn btn-danger">BATAL</a>
		</form>
	</div>
</div>
