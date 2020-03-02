<?php
$id_admin=$_POST['id_admin'];
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];

//simpan data ke database
$query="INSERT INTO admin VALUES('$id_admin', '$username', '$password', '$status')";
$simpan=mysql_query($query) or die(mysql_error());

?>

<script type="text/javascript">
alert('Berhasil Tersimpan!');
document.location.href='index.php?page=page/data_admin';
</script>