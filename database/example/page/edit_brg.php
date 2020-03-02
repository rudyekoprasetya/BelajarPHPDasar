<?php
//ambil data id_brg
$id_brg=$_GET['id_brg'];
//query
$query="SELECT * FROM barang WHERE id_brg='$id_brg'";
$data=mysql_query($query) or die(mysql_error());
//data
$row=mysql_fetch_assoc($data);
?>
<div class="row panel panel-success">
	<h3 class="panel-heading">Edit Data</h3>
	<div class="col-lg-12 panel-body">
		<form action="?page=page/ubah_brg" method="POST" enctype="multipart/form-data">
			<label>ID</label>
			<input type="text" name="id_barang" class="form-control" readonly="readonly" value="<?php echo $row['id_brg']; ?>">			
			<label>Kategori</label>
			<select class="form-control" name="kategori">
<?php
$querykat="SELECT * FROM kategori";
$datakat=mysql_query($querykat) or die(mysql_error());
$rowkat=mysql_fetch_assoc($datakat);
do {
?>
				<option value="<?php echo $rowkat['id_kat']; ?>">
				<?php echo $rowkat['nama_kat']; ?></option>				
<?php
 } while($rowkat=mysql_fetch_assoc($datakat));
?>
			</select>
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" required="required" value="<?php echo $row['nama_barang']; ?>">
			<label>Supplier</label>
			<input type="text" name="supplier" class="form-control" value="<?php echo $row['supplier']; ?>">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control">
			<label>Tanggal Kadaluarsa</label>
			<input type="date" name="tgl_expired" class="form-control" value="<?php echo $row['tgl_expired']; ?>">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control" value="<?php echo $row['stok']; ?>">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="aktif">Aktif</option>
				<option value="tidak">Tidak Aktif</option>
			</select>
			<br><br>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<a href="?page=page/data_barang" class="btn btn-danger">BATAL</a>
		</form>
	</div>
</div>

