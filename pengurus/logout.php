<?php
//buat session
if(!isset($_SESSION)) {
	session_start();
}

//hapus data yang login di session
$_SESSION['username']=NULL;
unset($_SESSION['username']);

//hancur data
session_destroy();

//kembali ke login
header("location: login.php")


?>