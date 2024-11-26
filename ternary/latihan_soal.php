<?php

$buku = "komik";
$genre = "komedi";

switch ($buku) {
    case 'komik':
        $harga = 40000;
        echo "jenis buku : $buku <br>";
        echo "harga buku : $harga <br>";
        switch ($genre) {
            case 'romance':
                echo "genre buku : romance <br>";
                $total = $harga * 0.05;
                $hasil = $harga - $total;
                echo "genre romance dapat dskon 5% <br> diskon anda : $total <br>";
                echo "total yang harus di bayar : $hasil";
                break;
            case 'thiler':
                    echo "genre buku : thiler <br>";
                    $total = $harga * 0.1;
                    $hasil = $harga - $total;
                    echo "genre thiler dapat dskon 10% <br> diskon anda : $total <br>";
                    echo "total yang harus di bayar : $hasil";
                    break;
            case 'komedi':
                    echo "genre buku : komedi <br>";
                    $total = $harga * 0.15;
                    $hasil = $harga - $total;
                    echo "genre romance dapat dskon 15% <br> diskon anda : $total <br>";
                    echo "total yang harus di bayar : $hasil";
                    break;
        }
        break;
    
    default:
        echo "buku tidak tersedia <h2>";
        break;
}