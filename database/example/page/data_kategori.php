<?php
//query untuk menampilkan data 
$query="SELECT * FROM kategori";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<div class="row">
	<div class="col-lg-12 panel panel-primary">
	<h2 class="panel-heading"><i class="fa fa-table"></i> Data Kategori</h2>
		<div class="table-responsive panel-body">

		<a href="page/cetak_kategori.php" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-print"></i> Cetak</a>
        
          <table class="table table-bordered table-hover table-striped tablesorter">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>Nama Kategori</th>
          			<th>Status</th>
          			<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
<?php 
do {
?>
          		<tr>
          			<td><?php echo $row['id_kat']; ?></td>
          			<td><?php echo $row['nama_kat']; ?></td>
          			<td><?php echo $row['status']; ?></td>
          			<td>
          				<a href="?page=page/edit_kategori&id_kat=<?php echo $row['id_kat']; ?>" class="btn btn-warning">Edit</a> 
          				<a href="?page=page/hapus_kategori&id_kat=<?php echo $row['id_kat']; ?>" class="btn btn-danger" onclick="return confirm('Yakin nih mau hapus?');" >Hapus</a>
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
		<form action="?page=page/simpan_kategori" method="POST">
			<label>ID</label>
			<input type="text" name="id_kat" class="form-control" required="required">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kat" class="form-control" required="required">
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="aktif">AKTIF</option>
				<option value="tidak">TIDAK AKTIF</option>
			</select>
			<br><br>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<button type="reset" class="btn btn-danger">BATAL</button>
		</form>
	</div>
</div>

