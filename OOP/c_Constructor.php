<?php 
    class Kucing {

        public $nama, $warna, $jenis;

        function __construct($nama = "Pesek", $warna = "Oranye", $jenis = "Betina") {
            $this->nama = $nama;
            $this->warna = $warna;
            $this->jenis = $jenis;
        }
    }
?>