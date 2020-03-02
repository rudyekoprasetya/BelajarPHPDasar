<?php
//query untuk menampilkan data 
$query="SELECT masuk.id_masuk, masuk.id_brg, barang.nama_barang, masuk.qty, masuk.tanggal FROM barang, masuk WHERE masuk.id_brg=barang.id_brg";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<div class="row">
	<div class="col-lg-12 panel panel-primary">
	<h2 class="panel-heading"><i class="fa fa-table"></i> Data Barang Masuk</h2>
		<div class="table-responsive panel-body">
          <table class="table table-bordered table-hover table-striped tablesorter">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>ID Barang</th>
          			<th>Nama Barang</th>
          			<th>Qty</th>
          			<th>Tanggal</th>
          			<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
<?php 
do {
?>
          		<tr>
          			<td><?php echo $row['id_masuk']; ?></td>
          			<td><?php echo $row['id_brg']; ?></td>
          			<td><?php echo $row['nama_barang']; ?></td>
          			<td><?php echo $row['qty']; ?></td>
          			<td><?php echo $row['tanggal']; ?></td>
          			<td>
          				<a href="?page=page/edit_masuk&id_masuk=<?php echo $row['id_masuk']; ?>" class="btn btn-warning">Edit</a> 
          				<a href="?page=page/hapus_masuk&id_masuk=<?php echo $row['id_masuk']; ?>" class="btn btn-danger" onclick="return confirm('Yakin nih mau hapus?');" >Hapus</a>
          				<a href="page/cetak_brg_masuk.php?id_masuk=<?php echo $row['id_masuk']; ?>" class="btn btn-success" target="_blank">Cetak</a>
          			</td>
          		</tr>
<?php
} while($row=mysql_fetch_assoc($data));
?>
          	</tbody>
          </table>
	</div>
</div>
