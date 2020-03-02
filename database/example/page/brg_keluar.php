<?php
//query untuk menampilkan data 
$query="SELECT keluar.id_keluar, keluar.id_brg, barang.nama_barang, keluar.qty, keluar.tanggal FROM barang, keluar WHERE keluar.id_brg=barang.id_brg";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($data);
?>

<div class="row">
	<div class="col-lg-12 panel panel-primary">
	<h2 class="panel-heading"><i class="fa fa-table"></i> Data Barang Keluar</h2>
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
          			<td><?php echo $row['id_keluar']; ?></td>
          			<td><?php echo $row['id_brg']; ?></td>
          			<td><?php echo $row['nama_barang']; ?></td>
          			<td><?php echo $row['qty']; ?></td>
          			<td><?php echo $row['tanggal']; ?></td>
          			<td>
          				<a href="?page=page/edit_keluar&id_keluar=<?php echo $row['id_keluar']; ?>" class="btn btn-warning">Edit</a> 
          				<a href="?page=page/hapus_keluar&id_keluar=<?php echo $row['id_keluar']; ?>" class="btn btn-danger" onclick="return confirm('Yakin nih mau hapus?');" >Hapus</a>
          				<a href="page/cetak_brg_keluar.php?id_keluar=<?php echo $row['id_keluar']; ?>" class="btn btn-success" target="_blank">Cetak</a>
          			</td>
          		</tr>
<?php
} while($row=mysql_fetch_assoc($data));
?>
          	</tbody>
          </table>
	</div>
</div>
