<?php
	class orang {
		public $nama;

		//fungsi untuk memasukan nama
		function set_nama($new_nama) {
			return $this->nama=$new_nama;
		}

		function tampil_nama() {
			return $this->nama;
		}
	}

	class teman extends orang {

		public $nama_teman;
		
		function nama_teman($nama) {
			$this->nama_teman=$nama;
		}
	}

$rudy = new teman();

$rudy->set_nama("rudy");

$rudy->nama_teman("ani");

echo "nama saya ".$rudy->tampil_nama();
echo "<br>";
echo "nama teman saya ".$rudy->nama_teman; 
?>