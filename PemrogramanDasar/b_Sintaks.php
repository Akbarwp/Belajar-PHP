<?php
    /* Standar Output:
    echo, print
    print_r
    var_dump
    */

    echo "Jum'at\n";
    print 'Apa itu PHP?'; echo "\n";
    print_r(true); echo "\n";
    var_dump(123); echo "\n";


    // Variabel dan Tipe Data
    $nama = "Asep";
    $umur = 321;
    $tinggi = 1.71;
    $apakah_bekerja = false;


    // Aritmatika
    $x = 10;
    $y = 4;
    echo "Tambah: " . $x + $y . "\n";
    echo "Kurang: " . $x - $y . "\n";
    echo "Kali: " . $x * $y . "\n";
    echo "Bagi: " . $x / $y . "\n";
    echo "Modulus: " . $x % $y . "\n\n";


    // Assignment: =, +=, -=, *=, /=, .=
    $a = 3;
    $a++; // $a = $a + 1
    echo $a; echo "\n";

    $a -= 5; // $a = $a - 5
    echo $a; echo "\n";

    $nama .= " ";
    $nama .= "Sukaesih";
    echo $nama; echo "\n\n";


    // Perbandingan: <, >, <=, >=, ==, ===, !=, !==
    var_dump(5 > 2);
    var_dump(5 === "5"); echo "\n";


    // Logika: &&, ||, !
    var_dump(3 < 2 && 1 == "1");
    var_dump(3 > 2 || 1 == "1");
    var_dump(!(3 > 2));
?>