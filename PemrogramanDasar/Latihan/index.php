<?php
    session_start();
    
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    
    require "Function.php";
    require "pagination.php";

    $barang = query("SELECT * FROM barang LIMIT $awalData, $jmlDataPerHalaman");

    if(isset($_POST["submit"])) {
        $barang = search($_POST["search"]);

        $jmlDataPerHalaman = 3;
        $jmlData = count(search($_POST["search"]));
        $jmlHalaman = ceil($jmlData / $jmlDataPerHalaman);

        if(isset($_GET["halaman"])) {
            $halamanAktif = $_GET["halaman"];
        }else {
            $halamanAktif = 1;
        }
        $awalData = ($jmlDataPerHalaman * $halamanAktif) - $jmlDataPerHalaman;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        .loader{
            width: 100px;
            position: absolute;
            top: 116px;
            left: 280px;
            z-index: -1;
            display: none;
        }

        /* PDF Exporting menggunakan browser langsung */
        @media print {
            .logout, .tambah, .tombolCari, .reset, .aksi {
                display: none;
            }
        }

        tr:nth-child(even) {
            background-color: #F0F8FF;
        }

    </style>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <a href="logout.php" class="logout">Logout</a>
    <br>

    <h1>Daftar Barang</h1>

    <a href="tambah.php" class="tambah">Tambah Data</a>
    <br><br>

    <!-- Tombol Cari (Search) -->
    <form action="" method="post">
        <input type="text" name="search" size="30" 
        autofocus placeholder="Keyword Pencarian...." autocomplete="" id="keyword" class="tombolCari">
        <button type="submit" name="submit" id="tombolCari" class="tombolCari">Cari</button>

        <img src="img/loader.gif" class="loader">

        <button type="submit" name="reset" href="?halaman=<?= 1 ?>" class="reset">Reset</button>
    </form>

    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
                <th>ID Barang</th>
                <th>Jenis Barang</th>
                <th>Nama Barang</th>
                <th>Ukuran Barang</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Gambar</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($barang as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td class="aksi">
                    <a href="ubah.php?id=<?= $row["ID_Barang"] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["ID_Barang"] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
                <td><?= $row["ID_Barang"] ?></td>
                <td><?= $row["Jenis_Barang"] ?></td>
                <td><?= $row["Nama_Barang"] ?></td>
                <td><?= $row["Ukuran_Barang"] ?></td>
                <td><?= $row["Harga_Jual"] ?></td>
                <td><?= $row["Harga_Beli"] ?></td>
                <td><?= $row["Stok"] ?></td>
                <td style="text-align: center;"><img src="img/<?= $row["Gambar"] ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Navigasi Halaman -->
    <?php if($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jmlHalaman; $i++) : ?>
        <?php if($i == $halamanAktif): ?>
            <a href="?halaman=<?= $i ?>" style="font-weight: bold; color: green;"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jmlHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif; ?>


</body>
</html>