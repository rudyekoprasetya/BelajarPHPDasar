<?php
//buat session
if(!isset($_SESSION)) {
	session_start();
}

//jika ada orang yang masuk tanpa login
if(empty($_SESSION['username'])) {
	header("location: login.php");
}
?>