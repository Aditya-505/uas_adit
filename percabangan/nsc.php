<?php

$tipeakun = "admin";
$aksi = "hapus";

switch ($tipeakun) {
    case "admin":
        echo "tipe data : $tipeakun <br>";
        echo "aksi : ";
        switch ($aksi) {
            case "edit":
                echo "edit akun admin <br>";
                break;
        case "hapus":
            echo "admin menghapus akun <br>";       
        }
    break;
        case "user":
            switch ($aksi) {
                case "edit":
                    echo "user edit akun admin <br>";
                    break;
            case "hapus":
                echo "user tidak bisa menghapus akun <br>";
                break;        
       
            }
            break;
    default:
        echo "akun tidak ditemukan";
        break;

        }

?>