<?php
//koneksi
require_once('koneksi.php');

$id=$_GET['id']; //ambil ID

$query="DELETE FROM tb_pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);

//langsung pindah ke laman tampil data
header('location: tampil_data.php');
?>