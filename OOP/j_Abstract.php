<?php 
    abstract class Smartphone  {

        public $merk, $nama;

        function __construct($merk = "", $nama = "") {
            $this->merk = $merk;
            $this->nama = $nama;
        }

        abstract function infoProduk();
    }

    class Samsung extends Smartphone {

        function __construct($merk = "", $nama = "") {
            
            parent::__construct($merk, $nama);
        }

        function infoProduk(){
            $str = "Samsung: {$this->nama}";
            return $str;
        }
    }
?>