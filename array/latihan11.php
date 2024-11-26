<?php

$list = [
    [
        "no" => 1,
        "judul" => "Harry potter and the sorcerer's stone",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 1997
    ],
    [
        "no" => 2,
        "judul" => "Harry potter and the chamber of secrets",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 1998
    ],
    [
        "no" => 3,
        "judul" => "Harry potter and the prisoner azkaban",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 1999
    ],
    [
        "no" => 4,
        "judul" => "Harry potter and the goblet of fier",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 2000
    ],
    [
        "no" => 5,
        "judul" => "Harry potter and the order of the phoenix",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 2003
    ],
    [
        "no" => 6,
        "judul" => "Harry potter and the half-blood prince",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 2005
    ],
    [
        "no" => 7,
        "judul" => "Harry potter and the deathly hallows",
        "genre" => "fantasi",
        "penulis" => "Joanne rowling",
        "penerbit" => "scholastic corporation",
        "tanggal_rilis" => 2007
    ],
    [
        "no" => 8,
        "judul" => "lord fo the rings 1",
        "genre" => "fantasi",
        "penulis" => "jhon ronald reuld tolkien",
        "penerbit" => "J.R.R. tolkin",
        "tanggal_rilis" => 1954,
    ],
    [
        "no" => 9,
        "judul" => "lord fo the rings 2",
        "genre" => "fantasi",
        "penulis" => "jhon ronald reuld tolkien",
        "penerbit" => "J.R.R. tolkin",
        "tanggal_rilis" => 1954,
    ],
    [
        "no" => 10,
        "judul" => "lord fo the rings 3",
        "genre" => "fantasi",
        "penulis" => "jhon ronald reuld tolkien",
        "penerbit" => "J.R.R. tolkin",
        "tanggal_rilis" => 1955,
    ],
    [
        "no" => 11,
        "judul" => "the hobbit",
        "genre" => "fantasi",
        "penulis" => "jhon ronald reuld tolkien",
        "penerbit" => "J.R.R. tolkin",
        "tanggal_rilis" => 1937,
    ],
    [
        "no" => 12,
        "judul" => "the lightning thief",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1983 ,
    ],
    [
        "no" => 13,
        "judul" => "the sea of monster",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1983 ,
    ],
    [
        "no" => 14,
        "judul" => "the titan's curse",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1983 ,
    ],
    [
        "no" => 15,
        "judul" => "the blade of the labyrinth",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1983 ,
    ],
    [
        "no" => 16,
        "judul" => "the last olympian",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1983 ,
    ],
    [
        "no" => 17,
        "judul" => "apollo the hidden oracle",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1999 ,
    ],
    [
        "no" => 18,
        "judul" => "apollo the dark prophecy",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1999 ,
    ],
    [
        "no" => 19,
        "judul" => "apollo the burning maze",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1999 ,
    ],
    [
        "no" => 20,
        "judul" => "apollo the tyrant's tomb",
        "genre" => "fantasi",
        "penulis" => "rick riordan",
        "penerbit" => "mizan fantasy",
        "tanggal_rilis" => 1999 ,
    ],
    ];

foreach ($list as $data) {
    echo "No : " . $data['no'] . "<br>";
    echo "Judul : " . $data['judul'] . "<br>";
    echo "Genre : " . $data['genre'] . "<br>";
    echo "Penulis : " . $data['penulis'] . "<br>";
    echo "Penerbit : " . $data['penerbit'] . "<br>";
    echo "Tanggal rilis" . $data['tanggal_rilis'] . "<br>";
    echo "<hr>";
}