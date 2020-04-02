<?php
    // membuat class mobil
    class mobil {

        // ini merupakan properties
        var $jenis;
        var $bahan_bakar="bensin";
        var $jumlah_roda=4;

        //ini merupakan function atau method

        function __construct() {
            echo "ini adalah jenis Mobil";
            echo "<br>";
        }

        function maju() {
            echo "Mobil Berjalan Kedepan";
        }

        function mundur() {
            echo "Mobil Berjalan Kebelakang";
        }

        function isi_bensi($liter) {
            echo "Mobil diisi dengan $liter liter bensin";
        }

        function __destructor() {
            echo "ini adalah destructor class mobil";
        }

    }
?>