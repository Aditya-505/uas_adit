<?php

$jurusan = "TKRO";
$kelas = "12 TKRO";

if ($jurusan == "RPL") {
    
    if ($kelas == "10 RPL" ) {
        echo "ini kelas 10 RPL";
    } else if ($kelas == "11 RPL"){
            echo "ini kelas 11 RPL";
    } else if ($kelas == "12 RPL"){
            echo "ini kelas 12 RPL";
    } else {
        echo "kelas tidak ada";
    }
           
}else if ($jurusan == "TKRO") {
    
    if ($kelas == "10 TKRO" ) {
        echo "ini kelas 10 TKRO";
    } else if ($kelas == "11 TKRO"){
            echo "ini kelas 11 TKRO";
    } else if ($kelas == "12 TKRO"){
            echo "ini kelas 12 TKRO";
    } else  {
        echo "kelas tidak ada";
    }
          

}elseif ($jurusan == "TBSM") {
    if ($kelas == "10 TBSM" ) {
        echo "ini kelas 10 TKRO";
    } else if ($kelas == "11 TKRO"){
            echo "ini kelas 11 TKRO";
    } else if ($kelas == "12 TKRO"){
            echo "ini kelas 12 TKRO";
    } else {
        echo "kelas tidak ada";
    }
           
} else {
    echo "jurusan tidak ada";
}



?>