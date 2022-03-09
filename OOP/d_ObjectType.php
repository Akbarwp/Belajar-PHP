<?php 
    class Mouse {
        public $brand, $nama, $harga;

        public function __construct($brand = "", $nama = "", $harga = 0) {
            $this->brand = $brand;
            $this->nama = $nama;
            $this->harga = $harga;
        }
    }

    class CetakInfo {
        
        public function cetak(Mouse $mouse) {
            $str = "{$mouse->nama} | {$mouse->brand} (Rp{$mouse->harga})";
            return $str;
        }
    }

    $mouse1 = new Mouse("Fantech", "Helios XD5", "500000");

    $cetak = new CetakInfo();

    echo $cetak->cetak($mouse1);
?>