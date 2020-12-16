<?php

//jualan produk
class Produk{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sonny Computer", 250000);

echo "Komik : ".$produk3->getLabel();
echo "<br />";
echo "Game : ".$produk4->getLabel();