<?php
    // Pagination
    // Konfigurasi
    $jmlDataPerHalaman = 3;
    $jmlData = count(query("SELECT * FROM barang"));
    $jmlHalaman = ceil($jmlData / $jmlDataPerHalaman);
    
    // Jika halaman = 2, maka awalData = 3
    // Jika halaman = 3, maka awalData = 6
    if(isset($_GET["halaman"])) {
        $halamanAktif = $_GET["halaman"];
    }else {
        $halamanAktif = 1;
    }
    $awalData = ($jmlDataPerHalaman * $halamanAktif) - $jmlDataPerHalaman;
?>