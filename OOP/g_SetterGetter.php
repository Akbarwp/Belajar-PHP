<?php 
    class Monitor {

        private $brand, $nama, $ukuran;

        function __construct($brand = "", $nama = "", $ukuran = 0) {
            $this->brand = $brand;
            $this->nama = $nama;
            $this->ukuran = $ukuran;
        }

        function setBrand($brand) {
            $this->brand = $brand;
        }

        function getBrand() {
            return $this->brand;
        }

        function setNama($nama) {
            $this->nama = $nama;
        }

        function getNama() {
            return $this->nama;
        }

        function setUkuran($ukuran) {
            $this->ukuran = $ukuran;
        }

        function getUkuran() {
            return $this->ukuran;
        }
    }

    // Atau dapat menggunakan cara lain yaitu __Setter dan __Getter
?>