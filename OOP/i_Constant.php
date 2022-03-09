<?php 
    // Cara 1: tidak dapat digunakan dalam class, karena bertipe untuk global
    define('MOUSE', 'Fantech');

    // Cara 2: dapat digunakan dalam class dan konsep OOP, dan bersifat seperti static
    const MONITOR = "AOC";

    class  Monitor  {
        const LAYAR = 23.5;
    }


    echo MOUSE;
    echo "\n";
    echo MONITOR;
    echo "\n";
    echo Monitor::LAYAR;

    // Magic Constant:
    /*
        __LINE__
        __FILE__
        __DIR__
        __FUNCTION__
        __CLASS__
        __TRAIT__
        __METHOD__
        __NAMESPACE__
    */
?>