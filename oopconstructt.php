<?php

class jelma{

    var $nama;
    var $warna;

    function __construct(){
        echo "Ini adalah isi method construct <br/>";
    }

    function tampilkan_nama(){
        return "Nama saya oyo <br/>";
    }
}

$manusia = new jelma();

echo $manusia->tampilkan_nama();