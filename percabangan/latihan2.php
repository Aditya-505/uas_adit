<?php

$nama = "Muhammad aditya";
$kelas = "XI RPL 2";
$jenis_kelamin = "Laki laki";

echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Jenis kelamin : $jenis_kelamin <br>";
echo "<hr>";

$mtk = 80;
$indo = 100;
$inggris = 80;
$produktif = 90;

echo "Nilai matematika : $mtk <br>";
echo "Nilai bahasa indonesia : $indo <br>";
echo "Nilai bahasa inggris : $inggris <br>";
echo "Nilai KK produkrof : $produktif <br>";
echo "<hr>";

$hasil1 = $indo + $indo + $inggris + $produktif;
$hasil2 = $hasil1 / 4;

echo "nilai rata rata : $hasil2 <br>";

if ($hasil2 >= 85) {
    echo "Anda lulus";
} else {
    echo "Anda tidak lulus";
}


?>