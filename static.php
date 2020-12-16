<?php
//Cara mengakses langsung properti dan method didalam class
//tanpa harus membuat instansiasi atau object
// class ContohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "halo". self::$angka++ ." kali."; //self untuk mengambil nilai angka karena tidak bisa pakai $this
//     }
// }

// echo ContohStatic::$angka;
// echo "<br />";
// echo ContohStatic::halo();
// echo "<br />";
// echo ContohStatic::halo();

//Kasus 2 pada static keyword nilai static akan selalu tetap
//mesipun object di instansiasi beruang kali
class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo" . self::$angka++ . " Kali. <br />";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

