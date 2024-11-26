<?php


class pendaftaran{

    public function datadiri($jurusan,$nama,$jk,$tempat_lahir,$tanggal_lahir,$email){

        echo "Jurusan : ".$jurusan."<br>";
        echo "Nama : ".$nama."<br>";
        echo "Jenis kelamin : ".$jk."<br>";
        echo "Tempat lahir : ".$tempat_lahir."<br>";
        echo "Tanggal lahir : ".$tanggal_lahir."<br>";
        echo "Email : ".$email;
    }public function alamat ($provinsi,$kota_kab,$kecamatan,$desa_kel,$alamat,$kode_pos){

        echo "Provasi : ".$provinsi."<br>";
        echo "Kab/kota : ".$kota_kab."<br>";
        echo "Kecamatan : ".$kecamatan."<br>";
        echo "Desa/kelurahan : ".$desa_kel."<br>";
        echo "Alamat : ".$alamat."<br>";
        echo "Kode pos :".$kode_pos;

    }public function asalsekolah($nama_sekolah,$alamat_sekolah){

        echo "Nama asal sekolah :".$nama_sekolah."<br>";
        echo "Alamat sekolah : ".$alamat_sekolah;

    }public function DATAortu($nama_wali,$pekerjaan_wali,$no,$alamat_lengkap){

        echo "Nama lengkap ayah/ibu/wali : ".$nama_wali."<br>";
        echo "pekerjaan ayah/ibu/wali : ".$pekerjaan_wali."<br>";
        echo "NO hp yang bisa di hubungi : ".$no."<br>";
        echo "Alamat lengkap : ".$alamat_lengkap;
    } 



    }

    $cetak = new pendaftaran();

    echo $cetak->datadiri("RPL","koyoy","laki-laki","bandung","10/10/1000","zenalgelogmail.com");
    echo "<hr>";
    echo $cetak->alamat("bandung","bandung","cibaduyut","cibaduyut","cibaduyutlama","090");
    echo "<hr>";
    echo $cetak->asalsekolah("smpanomali","citepus");
    echo "<hr>";
    echo $cetak->DATAortu("yoyo","ngusep","8008","yoyokoroyo");



?>  