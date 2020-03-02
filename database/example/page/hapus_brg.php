<?php
$id_brg=$_GET['id_brg'];

//untuk hapus gambar
$querygmb="SELECT * FROM barang WHERE id_brg='$id_brg'";
$datagmb=mysql_query($querygmb) or die(mysql_error());
$rowgmb=mysql_fetch_assoc($datagmb);
$gambar=$rowgmb['foto'];

//hapus gambar di folder
unlink("foto/".$gambar);

//query untuk hapus data di database
$query="DELETE FROM barang WHERE id_brg='$id_brg'";
$hapus=mysql_query($query) or die(mysql_error());

?>
<script type="text/javascript">
alert('Berhasil Dihapus!');
document.location.href='index.php?page=page/data_barang';
</script>