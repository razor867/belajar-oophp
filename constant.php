<?php
//cara 1
// define('NAMA', 'Ujang');//tidak bisa disimpan di dalam class
// echo NAMA;

// echo "<br />";

// //cara 2
// const UMUR = 32; //bisa disimpan di dalam class
// echo UMUR;

// class Coba{
//     const WAW = 'Ujang';//jadi const ini termasuk static keyword;

//     // public function tampil(){
//     //     return self::WAW;
//     // }
// }

// echo Coba::WAW;
// // $ok = new Coba;
// // echo $ok->tampil();

echo __LINE__;//tampil angka 24(menampilkan baris)
echo "<br />";
echo __FILE__;//menampilkan alamat file php ini

echo "<hr>";
function mantap(){
    return "fungsi " . __FUNCTION__ . ".";//menampilkan nama fungsi
}
echo mantap();

echo "<hr>";

class Uranus{
    public $kelas = __CLASS__;
}

$ma = new Uranus;
echo $ma->kelas;