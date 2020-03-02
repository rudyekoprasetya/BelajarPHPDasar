<?php
//koneksi
include('koneksi.php');

//ambil variable ID
$id=$_GET['id'];

//query untuk hapus data
$query="DELETE FROM pengurus WHERE id='$id'";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());

?>
<a href="?page=tampil_data">Sukses Hapus Data!</a>