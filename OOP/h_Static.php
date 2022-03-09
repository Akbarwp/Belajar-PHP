<?php 
    class Mobil {

        public static $merk = "Inova", $jml = 1;

        static function infoMobil() {
            return "Aku adalah mobil " . self::$merk;
        }

        function jumlah() {
            return "Aku ada " . self::$jml++;
        }
    }

    echo Mobil::$merk;
    echo "\n";
    echo Mobil::infoMobil();
    echo "\n";
    
    $obj = new Mobil();
    
    echo $obj->jumlah() . "\n";
    echo $obj->jumlah() . "\n";
    echo $obj->jumlah() . "\n";

    echo "\n";

    $obj1 = new Mobil();
    
    echo $obj1->jumlah() . "\n";
    echo $obj1->jumlah() . "\n";
    echo $obj1->jumlah() . "\n";
?>