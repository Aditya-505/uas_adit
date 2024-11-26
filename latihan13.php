<?php

class BangunDara{

    public $luas_persegi ;

    public function luaspersegi($sisi){

        $this->luas_persegi = $sisi*$sisi;
        echo "Menghitung luas persegi (S x S)<br>";
        echo "sisi = $sisi <br>";
        echo  "$sisi x $sisi = $this->luas_persegi";
    
    }public function luaspersegipanjang($panjang,$lebar){

        $this->luas_persegi_panjang = $panjang*$lebar;
        echo "Menghitung luas persegi panjang (P x L)<br>";
        echo "panjang = $panjang <br>";
        echo "lebar = $lebar <br>";
        echo "$panjang x $lebar = $this->luas_persegi_panjang";

    }public function luassegitiga($sisi,$tinggi){

        $this->luas_segitiga = 1/2*$sisi*$tinggi;
        echo "Menghitung luas segitiga (1/2 x S x T) <br>";
        echo "sisi = $sisi <br>";
        echo "tinggi = $tinggi <br>";
        echo "1/2 x $sisi x $tinggi = $this->luas_segitiga";

    }public function luaslingkaran($r){

        $this->luas_lingkaran = 3.14*$r*$r;
        echo "Menghitung luas lingkaran (3.14 x R x R) <br>";
        echo "jari-jari = $r <br>";
        echo "3.14 x $r x $r = $this->luas_lingkaran";
    }



}

$cetak = new BangunDara();

echo $cetak->luaspersegi(3);
echo "<hr>";
echo $cetak->luaspersegipanjang(7,5);
echo "<hr>";
echo $cetak->luassegitiga(6,3);
echo "<hr>";
echo $cetak->luaslingkaran(9);
?>