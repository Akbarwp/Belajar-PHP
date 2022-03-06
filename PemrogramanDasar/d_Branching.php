<?php
    // If, else if, ternary, switch case
    echo "Branching if else: "; echo "\n";
    $bahasa = "Jerman";
    if($bahasa == "Indonesia") {
        echo "Selamat pagi";
    } else if($bahasa == "Jepang") {
        echo "Ohayou";
    } else {
        echo "Good Morning";
    }

    echo "\n";

    echo "Branching ternary: "; echo "\n";
    $nilai = 9;
    echo $nilai > 8 ? "Sangat Baik" : "Baik";

    echo "\n";

    echo "Branching switch-case: "; echo "\n";
    $angka = 1;
    switch($angka) {
        case 1:
            echo "Angka 1";
        break;

        case 2:
            echo "Angka 2";
        break;

        case 3:
            echo "Angka 3";
        break;
    }
?>