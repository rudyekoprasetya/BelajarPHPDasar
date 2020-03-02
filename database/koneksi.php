<?php
//inisialisasi akses database
$host="localhost"; //lokasi database server 
$user="root"; //user database server
$pass="123456"; //password database server
$db="komunitas_awal"; //nama database yang akan di koneksikan

//script koneksi ke database MYSQL
$connect=mysql_connect($host,$user,$pass) or die(mysql_error());

//mengaktifkan database 
$database=mysql_select_db($db,$connect);

//cek konfigurasi
// if($connect) {
// 	echo "Koneksi database Berhasil";
// }  else {
// 	echo "Koneksi database Gagal";
// }
?>