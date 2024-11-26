<?php

class contoh{
     public $nama = "Dafa";


     protected function tampil(){
        echo "Perkenalkan saya oyo yang tamvan";
     }

     public function keluar(){
        echo $this->tampil();
     }
}

$cetak = new contoh();

echo $cetak->keluar();
echo "<br>";
echo $cetak->nama;

?>