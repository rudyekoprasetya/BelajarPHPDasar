<?php
include('../config/koneksi.php');
//include koneksi dengan line
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();

//ambil pesan dari orang lain
$text=$bot->getMessageText();

//mengubah semua pesan ke huruf kecil
$chat=strtolower($text);

//balasan otomatis
if($chat=='hai' || $chat=='halo' || $chat=='hello' || $chat=='hi') {
	$user=$bot->getUserId();
	$balas='hai '.$user.' Salam Kenal';
	$bot->reply($balas);
	$packID='1';
	$stikerID='4';
	$bot->replySticker($packID,$stikerID);
} else if($chat=='siapa nama mu ?') {
	$balas='nama ku chat bot Line dengan PHP';
	$bot->reply($balas);
} else if($chat=='salam') {
	$balas='Salam kenal yah..';
	$bot->reply($balas);
} else if($chat=='list barang') {
	$query="SELECT barang.id_brg, kategori.nama_kat AS kategori, barang.nama_barang, barang.supplier, barang.foto, barang.tgl_expired, barang.stok, barang.status FROM barang, kategori WHERE kategori.id_kat=barang.kategori";
		//eksekusi query
		$data=mysql_query($query) or die(mysql_error());
		$row=mysql_fetch_assoc($data);
		$balas='';
	 do {	
	$list='Barangnya adalah '.$row['nama_barang']. ' stoknya '.$row['stok'].' buah dengan ID '.$row['id_brg'];
	$balas=$balas.$list.' ';
	} while($row=mysql_fetch_assoc($data));

	$bot->reply($balas);

} else {
	$balas='Maaf saya kurang paham';
	$bot->reply($balas);
}

?>