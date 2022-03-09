<?php 
    class Laptop {
        
        // dapat digunakan di mana saja, bahkan di luar kelas
        public $nama, $brand;

        // hanya dapat digunakan di dalam sebuah kelas beserta turunannya (inheritance-nya)
        protected $diskon;

        // hanya dapat digunakna di dalam sebuah kelas tertentu saja
        private $harga;


        function __construct($nama = "", $brand = "", $diskon = 0, $harga = 0) {
            
            $this->nama = $nama;
            $this->brand = $brand;
            $this->diskon = $diskon;
            $this->harga = $harga;
        }


        function setHarga($harga) {
            $this->harga = $harga;
        }
    }

    class Gaming extends Laptop {

        function setNama(Laptop $nama) {
            $this->nama = $nama;
        }

        function setDiskon(Laptop $diskon) {
            $this->diskon = $diskon;
        }
    }

    $laptop1 = new Laptop("Vivobook", "Asus", 10, 30000);

    echo $laptop1->nama;

?>