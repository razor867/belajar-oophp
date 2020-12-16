<?php

require_once 'app/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sonny Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use app\service\User as ServiceUser;
use app\produk\User as ProdukUser;

new ServiceUser(); //cara menjalakan class namespace
echo "<br />";
new ProdukUser(); //cara menjalakan class namespace