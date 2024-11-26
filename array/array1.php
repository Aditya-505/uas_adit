<?php
// array  1 dimensi
$arrBuah = ["Mangga","Jeruk","Apel","Pisang"];

// bisa di tampulkan satuan berdasarkan index (key) nya
echo $arrBuah[2];
echo "<br>";

// bisa di tampilkan semua (collective)
for ($i=0; $i < count($arrBuah);  $i++) { 
    echo "$arrBuah[$i]<hr>";
}

echo "<hr> forace <br>";
foreach ($arrBuah as $buah) {
    echo "$buah <br>";
}