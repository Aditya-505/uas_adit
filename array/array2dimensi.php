<?php
$nilai = 
[
    ["Rani", "Bandung", "Islan", 165],
    ["Roni", "Kuningan", "Islan", 175],
    ["Dedeng", "CImahi", "Ksisten", 160]
];

// menampilkan nilai array berdasarkan individu (baris & kolom)
echo $nilai[2][2];
echo "<hr>";
// 
for ($i=0; $i < count($nilai); $i++) {
    for ($n =0; $n < count($nilai[$i]); $n++) {
        echo $nilai[$i][$n] . "<br>";
    }
    echo "<hr>";
}

//
foreach ($nilai as $siswa) {
    foreach ($siswa as $biodata) {
        echo $biodata . " ";
    }
    echo "<br>";
}