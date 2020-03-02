<!-- untuk cari barang -->
<div class="row">
	<div class="col-lg-12 panel panel-primary">
	<h2 class="panel-heading"><i class="fa fa-barcode"></i> Cari Barang</h2>
	<form role="form" action="?page=page/data_brg_keluar" method="POST">
		<div class="form-group input-group">
	        <input type="text" class="form-control" name="id_brg" id="id_brg">
	        <span class="input-group-btn">
	          <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
	        </span>
      	</div>
	</form>
	</div>
</div>
<!-- untuk cari barang -->

<?php
//tampilkan data barang yang di scan
if (isset($_POST['id_brg'])) {
	$id_brg=$_POST['id_brg'];
	$query="SELECT * FROM barang WHERE id_brg='$id_brg'";
	$data=mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_assoc($data);
?>

<div class="row">
	<div class="col-lg-12 panel panel-danger">
	<form method="POST" action="?page=page/simpan_brg_keluar">
		<h2 class="panel-heading"><i class="fa fa-sign-in"></i> Barang Keluar</h2>
		<label>ID Barang</label>
		<input type="text" name="id_brg" class="form-control" value="<?php echo $row['id_brg']; ?>" readonly>
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control" value="<?php echo $row['nama_barang']; ?>" readonly>
		<label>Qty</label>
		<input type="number" name="qty" class="form-control">	
		<label>Tanggal Masuk</label>
		<input type="date" name="tanggal" class="form-control">
		<br><br>
		<button type="submit" class="btn btn-primary">SIMPAN</button>
		<button type="reset" class="btn btn-danger">BATAL</button>
	</form>
	</div>
</div>
<?php } ?>