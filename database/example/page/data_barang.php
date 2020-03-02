<?php
//query untuk menampilkan data
$query="SELECT barang.id_brg, kategori.nama_kat AS kategori, barang.nama_barang, barang.supplier, barang.foto, barang.tgl_expired, barang.stok, barang.status FROM barang, kategori WHERE kategori.id_kat=barang.kategori";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<div class="row">
	<div class="col-lg-12 panel panel-primary">
	<h2 class="panel-heading"><i class="fa fa-table"></i> Data Barang</h2>
		<div class="table-responsive panel-body">
          <table class="table table-bordered table-hover table-striped tablesorter">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>Kategori</th>
          			<th>Nama Barang</th>
          			<th>Supplier</th>
          			<th>Foto</th>
          			<th>Kadaluarsa</th>
          			<th>Stok</th>
          			<th>Status</th>
          			<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
<?php 
do {
?>
          		<tr>
          			<td><?php echo $row['id_brg']; ?></td>
          			<td><?php echo $row['kategori']; ?></td>
          			<td><?php echo $row['nama_barang']; ?></td>
          			<td><?php echo $row['supplier']; ?></td>
          			<td><img src="foto/<?php echo $row['foto']; ?>" width="100px" height="100px"></td>
          			<td><?php echo $row['tgl_expired']; ?></td>
          			<td><?php echo $row['stok']; ?></td>
          			<td><?php echo $row['status']; ?></td>
          			<td>
          				<a href="?page=page/edit_brg&id_brg=<?php echo $row['id_brg']; ?>" class="btn btn-warning">Edit</a> 
          				<a href="?page=page/hapus_brg&id_brg=<?php echo $row['id_brg']; ?>" class="btn btn-danger" onclick="return confirm('Yakin nih mau hapus?');" >Hapus</a>
          			</td>
          		</tr>
<?php
} while($row=mysql_fetch_assoc($data));
?>
          	</tbody>
          </table>
	</div>
</div>

<div class="row panel panel-success">
	<h3 class="panel-heading">Tambah Data</h3>
	<div class="col-lg-12 panel-body">
		<form action="?page=page/simpan_brg" method="POST" enctype="multipart/form-data">
			<label>ID</label>
			<input type="text" name="id_barang" class="form-control" required="required">			
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
			<input type="text" name="nama_barang" class="form-control" required="required">
			<label>Supplier</label>
			<input type="text" name="supplier" class="form-control">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control">
			<label>Tanggal Kadaluarsa</label>
			<input type="date" name="tgl_expired" class="form-control">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="aktif">Aktif</option>
				<option value="tidak">Tidak Aktif</option>
			</select>
			<br><br>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<button type="reset" class="btn btn-danger">BATAL</button>
		</form>
	</div>
</div>

