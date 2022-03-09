<?php 
    class Game extends Produk implements InfoProduk {
        private $waktuMain;

        function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        function getInfo() {
            $str = "{$this->getJudul()} | {$this->getLabel()} (Rp{$this->getHarga()})";
            return $str;
        }

        function getWaktuMain() {
            return $this->waktuMain;
        }

        function cetakInfoProduk() {
            $str = "Game: $this->getInfo() ~ {$this->getWaktuMain()} jam";
            return $str;
        }
    }
?>