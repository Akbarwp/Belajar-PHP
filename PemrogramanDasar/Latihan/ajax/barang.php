<?php
    // sleep(0.7);
    require '../function.php';

    $keyword = $_GET["keyword"];
    
    $query = "SELECT * FROM barang WHERE 
        Jenis_Barang LIKE '%$keyword%' OR
        Nama_Barang LIKE '%$keyword%' OR
        Ukuran_Barang LIKE '%$keyword%' OR
        Harga_Jual LIKE '%$keyword%' OR
        Harga_Beli LIKE '%$keyword%' OR
        Stok LIKE '%$keyword%'
    ";
    $barang = mysqli_query($conn, $query);
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
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
        <td>
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