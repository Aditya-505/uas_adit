<?php

function pendaftaran($jurusan,$nama,$jenis_kelamin,$tgl_lahir,$tempat_lahir,$no_hp,$email) {
    echo "Jurusan : $jurusan <br>";
    echo "Nama lengkap : $nama <br>";
    echo "jenis kelamin : $jenis_kelamin <br>";
    echo "Tanggal lahir : $tgl_lahir <br>";
    echo "Tempat lahir : $tempat_lahir <br>";
    echo "No hp : $no_hp <br>";
    echo "Email : $email <br>";
}

pendaftaran ("Rekayasa perangkat lunak","koyoy","laki-laki","29/10/2024","bandung","0889","koyyoy377@gmail.com");
echo "<hr>";

function alamatpendaftaran($prov,$kota_kab,$kecamatan,$desa_kel,$alamat,$kode_pos) {
    echo "Provasi : $prov <br>";
    echo "Kab/kota : $kota_kab <br>";
    echo "Kecamatan : $kecamatan <br>";
    echo "Desa/kelurahan : $desa_kel <br>";
    echo "Alamat : $alamat <br>";
    echo "Kode pos : $kode_pos ";
}

alamatpendaftaran("Bandung","Bandung","cibaduyut","ci tepus","ci tepus","405");
echo "<hr>";

function datasekolah($nama_sekolah,$alamat_sekolah) {
    echo "Nama asal sekolah : $nama_sekolah <br>";
    echo "Alamat sekolah : $alamat_sekolah <br>";
}

datasekolah("SMP 3 margahayu","Margahayu tangah");
echo "<hr>";

?>