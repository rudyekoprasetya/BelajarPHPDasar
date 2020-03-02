<?php
$id_kat=$_POST['id_kat'];
$nama_kat=$_POST['nama_kat'];
$status=$_POST['status'];

//simpan data ke database
$query="UPDATE kategori SET nama_kat='$nama_kat',  status='$status' WHERE id_kat='$id_kat'";
$ubah=mysql_query($query) or die(mysql_error());

?>

<script type="text/javascript">
alert('Berhasil Diubah!');
document.location.href='index.php?page=page/data_kategori';
</script>