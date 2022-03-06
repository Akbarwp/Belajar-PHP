<?php 
    class Perhitungan {

        public $angka1 = 5, $angka2 = 4;

        function tambah() {
            return $this->angka1 + $this->angka2;
        }
    }

    $hitung = new Perhitungan();

    echo "Penjumlahan: \n";
    echo $hitung->tambah(5,4);
?>