<?php
//include koneksi
include('koneksi.php');

//ambil data dari form edit_data
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gaji=$_POST['gaji'];

//query SQL untuk ubah data
$query="UPDATE pengurus SET nama='$nama', gender='$gender', alamat='$alamat', gaji='$gaji' WHERE id='$id'";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());

?>
<a href="?page=tampil_data">Sukses Ubah Data!</a>