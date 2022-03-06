<?php 
    class Produk {
        private $judul, $penulis, $penerbit, $harga;

        function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        
        public function getJudul() {
            return $this->judul;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function getHarga() {
            return $this->harga;
        }
    }
?>