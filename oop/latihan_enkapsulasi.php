<?php
	class orang {
		//enkapasulasi tipe public
		// public $nama;
		// private $nama;
		protected $nama;

		//fungsi untuk memasukan nama
		function set_nama($new_nama) {
			return $this->nama=$new_nama;
		}

		function tampil_nama() {
			return $this->nama;
		}
	}

	$rudy=new orang();

	$rudy->set_nama("Rudy");

	$nama_rudy=$rudy->tampil_nama();

	echo "Halo nama saya ".$nama_rudy;

?>