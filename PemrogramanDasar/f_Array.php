<?php
    // Array -> variabel yang dapat memiliki banyak nilai

    // Cara lama:
    $makanan = array("Bakso", "Sate", "Soto");
    // Cara baru:
    $objek = ["Pensil", 123, true];
    
    // Cara menampilkan isi array
    echo "Pakai var_dump(): \n";
    var_dump($makanan);

    echo "Pakai print_r(): \n";
    print_r($makanan);

    echo "Pakai foreach: \n";
    foreach($objek as $values) {
        echo $values . ", ";
    } echo "\n\n";

    // Menambahkan isi array baru
    $objek[] = "Keyboard";
    $objek[] = "Monitor";
    

    echo "Pakai for: \n";
    for($i = 0; $i < count($objek); $i++) {
        echo $objek[$i] . ", ";
    } echo "\n\n";


    echo "Satu elemen saja: \n";
    echo $objek[3] . " dan " . $objek[4];

    
    echo "\n\n";


    // Array dalam array
    $data = [
        ["Ucup", 20, "Sistem Informasi"], 
        ["Budi", 19, "Teknik Informatika"]
    ];

    echo "Array dalam array: \n";
    foreach($data as $values) :
        foreach($values as $a):
            echo $a . ", ";
        endforeach;
        echo "\n";
    endforeach;

    echo $data[0][2];
?>
