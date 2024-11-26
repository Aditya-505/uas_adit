<?php
$mhs = [
    ["nama" => "Candra",
     "jurusan" => "Teknik otomotif",
     "alamat" => "Bandung"
],
[
    "nama" => "Abdul",
    "jurusan" => "Teknik industri",
    "alamat" => "Jakarta"
],
];

foreach ($msh as $data) {
    echo "Nama : " . $data['nama'] . "<br>";
    echo "Jurusan : " . $data['jurusan'] . "<br>";
    echo "Alamat : " . $data['alamat'] . "<br>";
}