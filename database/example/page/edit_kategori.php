<?php
//ambil data id_admin
$id_kat=$_GET['id_kat'];
//query
$query="SELECT * FROM kategori WHERE id_kat='$id_kat'";
$data=mysql_query($query) or die(mysql_error());
//data
$row=mysql_fetch_assoc($data);
?>

<div class="row panel panel-success">
	<h3 class="panel-heading">Edit Data</h3>
	<div class="col-lg-12 panel-body">
		<form action="?page=page/ubah_kategori" method="POST">
			<label>ID</label>
			<input type="text" name="id_kat" class="form-control" value="<?php echo $row['id_kat']; ?>" readonly>
			<label>Nama Kategori</label>
			<input type="text" name="nama_kat" class="form-control" value="<?php echo $row['nama_kat']; ?>" >
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="aktif" <?php if (!(strcmp($row['status'], "aktif"))) {echo "SELECTED";}?>>AKTIF</option>
				<option value="tidak" <?php if (!(strcmp($row['status'], "tidak"))) {echo "SELECTED";}?>>TIDAK AKTIF</option>
			</select>
			<br><br>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<a href="?page=page/data_kategori" class="btn btn-danger">BATAL</a>
		</form>
	</div>
</div>
