<?php
$data = ["Dwi" => 90, "Asep" => 75, "Dudung" => 65, "Rohman" => 85];

foreach ($data as $key => $val) {
    echo "Nama : $key<br>;";
    echo "Nilai : $val<hr>";
    $nilai = $key >= 75 ? "lulus" : "tidak lulus";
    echo "Keterangan : $nilai <br>";

    
}
