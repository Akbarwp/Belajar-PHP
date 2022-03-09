<?php 
    class Buku extends Produk implements InfoProduk {
        private $jmlHalaman;

        function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $jmlHalaman = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        function getInfo() {
            $str = "{$this->getJudul()} | {$this->getLabel()} (Rp{$this->getHarga()})";
            return $str;
        }

        function getJmlHalaman() {
            return $this->jmlHalaman;
        }

        function cetakInfoProduk() {
            $str = "Buku: $this->getInfo() - {$this->getJmlHalaman()} halaman";
            return $str;
        }
    }
?>