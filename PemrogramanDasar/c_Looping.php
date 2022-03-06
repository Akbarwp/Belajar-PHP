<?php
    // for, while, do-while, foreach

    echo "Looping For: ";
    for($i = 1; $i <= 5; $i++) {
        echo $i; echo " ";
    }

    for($i = 5; $i >= 1; $i--) :
        $i; echo " ";
    endfor;

    echo "\n";

    echo "Looping While: ";
    $x = 0;
    while($x < 10) {
        echo $x; echo " ";
        $x += 2;
    }

    echo "\n";

    echo "Looping Do-While: ";
    $y = 5;
    do{
        echo $y; echo " ";
        $y--;
    } while($y >= 0);

    echo "\n";

    echo "Looping Matriks: "; echo "\n";
    for($i = 1; $i <= 3; $i++) {
        for($j = 1; $j <= 5; $j++) {
            echo $i . "," . $j; echo " ";
        }
        echo "\n";
    }


    echo "Looping Foreach: "; echo "\n";
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
    foreach ($hari as $hasil) {
        echo $hasil; echo ", ";
    }
?>