<?php

//jualan produk
class Produk{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        
        return $str;
    }

}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "Komik : ".parent::getinfoProduk()." - {$this->jmlHalaman} Halaman.";
        return $str;
    }

}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
    
    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    //CARA GUE
    // public function cetak(Produk $produk){
    //     if($produk->jmlHalaman == 0){
    //         $tipe = "Game";
    //         $ket = "~ {$produk->waktuMain} Jam";
    //     }else{
    //         $tipe = "Komik";
    //         $ket = "- {$produk->jmlHalaman} Halaman";
    //     }
    //     $str = "{$tipe} : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) {$ket}";
    //     return $str;
    // }

    public function cetak(Produk $produk){
         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
    
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sonny Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br />";
echo $produk2->getInfoProduk();
