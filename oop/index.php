<?php
    //masukan file class
    require_once("latihan_oop.php");

    // inisialisasi object
    $sedan = new mobil();
    $pickup = new mobil;

    //menjalankan function dari class
    $sedan->maju();

    echo "<br>";
    
    $jumlah=10;
    $pickup->isi_bensi($jumlah);
    
?>