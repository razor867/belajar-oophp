<?php

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){//object type
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br />";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br />";
        }
        return $str;
    }
    
}