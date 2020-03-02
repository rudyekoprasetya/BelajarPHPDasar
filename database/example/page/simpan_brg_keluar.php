<?php
$id_brg=$_POST['id_brg'];
$qty=$_POST['qty'];
$tanggal=$_POST['tanggal'];

//memasukan data ke database
$query="INSERT INTO keluar VALUES('','$id_brg','$qty','$tanggal')";

$simpan=mysql_query($query) or die(mysql_error());
?>
<script type="text/javascript">
alert('Berhasil Tersimpan!');
document.location.href='index.php?page=page/brg_keluar';
</script>