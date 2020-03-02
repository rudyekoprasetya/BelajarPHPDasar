<?php
//koneksi
include('koneksi.php');

//untuk mengambil data form
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gaji=$_POST['gaji'];

//query untuk memasukan data dalam database
$query="INSERT INTO pengurus VALUES ('$id', '$nama', '$gender', '$alamat', '$gaji')";

//eksekusi query
$data=mysql_query($query) or die(mysql_error());
?>
<br>
<a href="tampil_data.php">Sukses! Lihat Data</a>