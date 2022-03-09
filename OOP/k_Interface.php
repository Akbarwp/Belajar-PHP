<?php 
    interface Buah {
        function getInfoBuah();
    }

    class Apel implements Buah {

        public $jenis, $jml;

        function __construct($jenis = "", $jml = "") {
            $this->jenis = $jenis;
            $this->jml = $jml;
        }

        function getInfoBuah() {
            $str = "Apel {$this->jenis} berjumlah {$this->jml}";
            return $str;
        }
    }

    class Jeruk implements Buah {

        public $jenis, $jml;

        function __construct($jenis = "", $jml = "") {
            $this->jenis = $jenis;
            $this->jml = $jml;
        }

        function getInfoBuah() {
            $str = "Jeruk {$this->jenis} berjumlah {$this->jml}";
            return $str;
        }
    }
?>