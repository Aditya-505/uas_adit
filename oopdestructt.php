<?php

class manusia{

   var $nama; 
   var $warna;
  
    function __construct(){
        echo "Ini adalah isi method construct <br/>";
    }
    function __destruct(){
        echo "Ini adalah isi method destruct <br/>";
    }
    function tampilkan_nama(){
        return "Nama sayo oyo <br/>";
    }
  
}

$manusia = new manusia();

echo $manusia->tampilkan_nama();

?>