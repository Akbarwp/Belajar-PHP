<?php
    $mahasiswa = [
        [
            "nim" => "12345",
            "nama" => "Ucup",
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nim" => "678910",
            "nama" => "Asep",
            "jurusan" => "Teknik Informatika"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informasi Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="Get2.php?nim=<?= $mhs["nim"]; ?> &
            nama=<?= $mhs["nama"]; ?> &
            jurusan=<?= $mhs["jurusan"]; ?>"> <?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach;?>
    </ul>
</body>
</html>