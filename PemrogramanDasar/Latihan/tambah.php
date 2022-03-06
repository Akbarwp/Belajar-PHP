<?php
    session_start();
    
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    
    require "Function.php";

    if(isset($_POST["submit"])) {
        if(create($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href= 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal ditambahkan');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="jenis">Jenis Barang: </label>
                <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="ukuran">Ukuran Barang: </label>
                <input type="text" name="ukuran" id="ukuran" required>
            </li>
            <li>
                <label for="jual">Harga Jual: </label>
                <input type="number" name="jual" id="jual" required>
            </li>
            <li>
                <label for="beli">Harga Beli: </label>
                <input type="number" name="beli" id="beli" required>
            </li>
            <li>
                <label for="stok">Stok: </label>
                <input type="number" name="stok" id="stok" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    
    <a href="index.php">Kembali</a>
</body>
</html>