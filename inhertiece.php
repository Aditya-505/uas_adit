<?php

// class utama
class kendaraan {

    protected $warna = "putih";
    public $merek;
}

// class turunan
class mobil extends  kendaraan{

    public function deksripsi(){
        echo "warna mobil $this->warna";
    }
}

$cetak = new mobil();
echo $cetak->deksripsi();

?>