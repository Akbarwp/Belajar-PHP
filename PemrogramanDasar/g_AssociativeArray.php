<?php
    $mahasiswa = [
        [
            "nama" => "Ucup",
            "umur" => 20,
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Budi",
            "umur" => 19,
            "jurusan" => "Teknik Informatika",
            "nilai" => [80, 90, 100]
        ]
    ];

    echo "Nilai: " . $mahasiswa[1]["nilai"][1] . "\n\n";

    foreach($mahasiswa as $mhs):
        echo "Nama: " .$mhs["nama"] . "\n";
        echo "Umur: " . $mhs["umur"] . "\n";
        echo "Jurusan: " . $mhs["jurusan"] . "\n\n";
    endforeach;
?>