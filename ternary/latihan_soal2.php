<?php

$bb = 70;
$tb = 167;

$seltb = $tb >= 165 ? 'Lolos sleksi' : 'Tidak lulus seleksi';
$selbb = $bb <= 75 ? 'Lolos sleksi' : 'Tidak lolos uji';

echo "Berat badan yusuf : $bb <br>";
echo "Tinggi badan yusuf : $tb <br><br>";

switch ($seltb=$selbb) {
    case 'Lolos sleksi':
        echo "Anda lolos sleksi/masuk TNI";
        break;
    
    default:
        echo "Anda tidak lolos sleksi/tidak masuk TNI";
        break;
}
?>