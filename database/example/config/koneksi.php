<?php

$host="localhost";
$user="root";
$pass="123456";

//koneksi
$con=mysql_pconnect($host,$user,$pass) or die(mysql_error());

//pilih db

$db=mysql_select_db('uk_gudang');

?>