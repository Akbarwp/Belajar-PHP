<?php

    abstract class Produk {
        private $judul, $penulis, $penerbit, $harga;

        function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        function getLabel() {
            return "{$this->getPenulis()}, {$this->getPenerbit()}";
        }

        abstract function getInfo();
        
        function getJudul() {
            return $this->judul;
        }

        function setJudul($judul) {
            $this->judul = $judul;
        }

        function getPenulis() {
            return $this->penulis;
        }
        
        function setPenulis($penulis) {
            $this->penulis = $penulis;
        }

        function getPenerbit() {
            return $this->penerbit;
        }

        function setPenerbit($Penerbit) {
            $this->Penerbit = $Penerbit;
        }

        function getHarga() {
            return $this->harga;
        }

        function setHarga($Harga) {
            $this->Harga = $Harga;
        }
    }
?>