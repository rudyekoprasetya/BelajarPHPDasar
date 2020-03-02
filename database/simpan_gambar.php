<?php
//memasukan koneksi 
include("koneksi.php");

//ambil dari variable form
$gambar=$_FILES['gambar']['name'];
$status=$_POST['status'];

$query="INSERT INTO gambar VALUES('','$gambar','$status')";

//eksekusi query
mysql_query($query) or die(mysql_error());

//upload file ke folder gambar
move_uploaded_file ($_FILES['gambar']['tmp_name'], "gambar/".$gambar); 

echo "<a href='?page=data_gambar'>upload gambar berhasil</a>";

?>