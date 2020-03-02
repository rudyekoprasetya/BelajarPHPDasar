<?php
$id_barang=$_POST['id_barang'];
$kategori=$_POST['kategori'];
$nama_barang=$_POST['nama_barang'];
$supplier=$_POST['supplier'];
$foto=$_FILES['foto']['name'];
$tgl_expired=$_POST['tgl_expired'];
$stok=$_POST['stok'];
$status=$_POST['status'];

//upload ke folder
move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);

//simpan data ke database
$query="INSERT INTO barang VALUES('$id_barang', '$kategori', '$nama_barang', '$supplier', '$foto', '$tgl_expired', '$stok', '$status')";
$simpan=mysql_query($query) or die(mysql_error());
?>
<script type="text/javascript">
alert('Berhasil Tersimpan!');
document.location.href='index.php?page=page/data_barang';
</script>