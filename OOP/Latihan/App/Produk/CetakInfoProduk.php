<?php
    class cetakInfoProduk {

        public $daftarProduk = array();

        function tambahProduk(Produk $produk) {

            $this->daftarProduk[] = $produk;
        }

        function cetak() {

            $str = "DAFTAR PRODUK: \n";

            foreach($this->daftarProduk as $p) {

                $str .= "- {$p->getInfo()} \n";
            }

            return $str;
        }
    }
?>