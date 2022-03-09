<?php namespace App\Produk;
    // Namespace digunakan bila ada nama class yang sama

    // Pembuatan namespace: Vendor\Namespace\SubNamespace;


    // Penggunaan untuk autoloading dengan adanya namespace
    spl_autoload_register(function ($class) {

        $class = explode('\\', $class);
        $class = end($class);

        require_once __DIR__ . '/Produk/' . $class . '.php';
    });

    spl_autoload_register(function ($class) {

        $class = explode('\\', $class);
        $class = end($class);

        require_once __DIR__ . '/Service/' . $class . '.php';
    });

    
    // Penggunaan alias pada Namespace
    use App\Produk\User as ProdukUser;
    // new ProdukUser();
?>