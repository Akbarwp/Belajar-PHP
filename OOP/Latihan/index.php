<?php 

    require_once 'App/init.php';

    $produk1 = new Buku("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 50000, 529);
    $produk2 = new Game("Undertable", "Toby Fox", "Toby Fox", 90000, 10);

    $daftarProduk = new cetakInfoProduk();

    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk2);

    echo  $daftarProduk->cetak();
    echo "\n";

    use App\Produk\User as ProdukUser;
    use App\Service\User as ServiceUser;

    $user1 = new ProdukUser();
    $user2 = new ServiceUser();

    $user1->info();
    echo "\n";
    $user2->info();
?>