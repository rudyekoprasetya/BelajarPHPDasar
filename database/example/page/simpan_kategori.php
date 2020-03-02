<?php
$id_kat=$_POST['id_kat'];
$nama_kat=$_POST['nama_kat'];
$status=$_POST['status'];

//simpan data ke database
$query="INSERT INTO kategori VALUES('$id_kat', '$nama_kat','$status')";
$simpan=mysql_query($query) or die(mysql_error());

?>

<script type="text/javascript">
alert('Berhasil Tersimpan!');
document.location.href='index.php?page=page/data_kategori';
</script>