<?php
$id_admin=$_GET['id_admin'];
//query
$query="DELETE FROM admin WHERE id_admin='$id_admin'";
$hapus=mysql_query($query) or die(mysql_error());

?>
<script type="text/javascript">
alert('Berhasil Dihapus!');
document.location.href='index.php?page=page/data_admin';
</script>