<?php

$nama = "rudi";
$jabatan = "senior";
$absen = "0";
$absen = "";
$performa = "90";


switch ($jabatan) {
    case 'junior':
        $gaji = 6000000;
        break;
    case 'senior':
        $gaji = 10000000;
        break;
    case 'manager':
        $gaji = 15000000;
        break;    
    default:
        echo "kamu bukan progremer";
        break;
}

echo "Nama : $nama <br>";
echo "jaabatan : progremer ";
echo "$jabatan <br>";
echo "gaji dasar : $gaji <br>";
echo "tunjangan kehadiran : ";
$true = 200000;
$false = 0;

//kehadiran
if ($absen == 0) {
    $bon = 200000;
    echo "$true <br>";
} else{
    $bon = 0;
    echo "$false <br>";
}

echo "bonus kinerja : ";
if ($performa >= 90) {
    $bonus = $gaji * 0.1;
    echo "$bonus <br>";
} else if ($performa > 75) {
    $bonus = $gaji * 0.05;
    echo "$bonus <br>";
} else {
    echo "0";
}

echo "total gaji sebelum pajak : ";
$gf = $bonus + $gaji + $bon;
echo "$gf <br>";

echo "pajak gaji 5% : ";
$pajak = $gf * 0.05;
echo "$pajak <br>";

echo "gaji bersih di terima : ";
$gb = $gf - $pajak ;
echo "$gb";

?>