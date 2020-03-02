<?php
$id_kat=$_GET['id_kat'];
//query
$query="DELETE FROM kategori WHERE id_kat='$id_kat'";
$hapus=mysql_query($query) or die(mysql_error());

?>
<script type="text/javascript">
alert('Berhasil Dihapus!');
document.location.href='index.php?page=page/data_kategori';
</script>