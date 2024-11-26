<?php

function Luaspersegi($sisi) {
    $hasil = $sisi * $sisi;
    echo "Menghitung luas persegi (S x S)<br>";
    echo  "$sisi x $sisi = $hasil <br>";
}

Luaspersegi(5);
echo "<hr>";

function Luaspersegipanjang($panjang,$lebar) {
    $hasil = $panjang * $lebar;
    echo "Menghitung luas persegi panjang (P x L) <br>";
    echo "$panjang x $lebar = $hasil <br>";
}

Luaspersegipanjang(8,4);
echo "<hr>";

function Luassegitiga($alas,$tinggi) {
    $hasil =  1/2 * $alas * $tinggi;
    echo "Menghitung luas segitiga (1/2 x A x T) <br>";
    echo "1/2 x $alas x $tinggi = $hasil";
}

Luassegitiga(5,10);
echo "<hr>";

function Luaslingkaran($r) {
    $hasil = 3.14 * $r * $r;
    echo "Menghitung luas lingkaran (3.14 x R x R) <br>";
    echo "3.14 x $r x $r = $hasil";
}

Luaslingkaran(3);
echo "<hr>";