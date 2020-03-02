<?php
$id_admin=$_POST['id_admin'];
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];

//simpan data ke database
$query="UPDATE admin SET username='$username', password='$password', status='$status' WHERE id_admin='$id_admin'";
$ubah=mysql_query($query) or die(mysql_error());

?>

<script type="text/javascript">
alert('Berhasil Diubah!');
document.location.href='index.php?page=page/data_admin';
</script>