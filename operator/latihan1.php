<?php

echo "<h2>menghitung luas bangun datar<h2>";
echo "<hr>";

echo "menghitung luas persegi <br>"; 
$sisi = 5;
$hasil = $sisi * $sisi;
echo "sisi  : $sisi <br>";
echo "sisi : $sisi <br>";
echo "rumus : sisi X sisi <br>";
echo "luas : $hasil <br>";
echo "<hr>";

echo "menghitung luas persegi panjang <br>";
$panjang = 3;
$lebar = 5;
$hasil = $panjang * $lebar;
echo "panjang : $panjang <br>";
echo "lebar : $lebar <br>";
echo "rumus : panjang X lebar <br>";
echo "luas : $hasil";
echo "<hr>";

echo "menghitung luas segitiga <br>";
$alas = 5;
$tinggi = 6;
$i = 1/2;
$l = $i * $tinggi * $alas;
echo "1/2<br>";
echo "alas : $alas <br>";
echo "tinggi : $tinggi <br>";
echo "rumus : 1/2 x alas X tinggi<br>";
echo " luas : $l<br>";
echo "<hr>";

echo "menghitung luas lingkaran <br>";
$r = 5;
$luas = 3.14 * $r * $r;
echo "jari jari : $r <br>";
echo "rumus : 3.14 X R X R <br>";
echo "luas : $luas <br>";




?>