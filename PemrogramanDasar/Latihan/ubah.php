<?php
    session_start();
    
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    
    require "Function.php";

    $id = $_GET["id"];

    $SQL = query("SELECT * FROM barang WHERE ID_Barang = '$id'")[0];

    if(isset($_POST["submit"])) {
        if(update($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil diubah');
                    document.location.href= 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah');
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Barang</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input name="id" value="<?= $SQL["ID_Barang"]; ?>" hidden>
            <input name="gambarLama" value="<?= $SQL["Gambar"]; ?>" hidden>
            
            <li>
                <label for="jenis">Jenis Barang: </label>
                <input type="text" name="jenis" id="jenis" required 
                value="<?= $SQL["Jenis_Barang"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $SQL["Nama_Barang"]; ?>">
            </li>
            <li>
                <label for="ukuran">Ukuran Barang: </label>
                <input type="text" name="ukuran" id="ukuran" required
                value="<?= $SQL["Ukuran_Barang"]; ?>">
            </li>
            <li>
                <label for="jual">Harga Jual: </label>
                <input type="number" name="jual" id="jual" required
                value="<?= $SQL["Harga_Jual"]; ?>">
            </li>
            <li>
                <label for="beli">Harga Beli: </label>
                <input type="number" name="beli" id="beli" required
                value="<?= $SQL["Harga_Beli"]; ?>">
            </li>
            <li>
                <label for="stok">Stok: </label>
                <input type="number" name="stok" id="stok" required
                value="<?= $SQL["Stok"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label> <br>
                <img src="img/<?= $SQL["Gambar"] ?>" alt="">
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
    
    <a href="MySQL.php">Kembali</a>
</body>
</html>