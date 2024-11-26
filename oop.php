<?php

// ini class
class manusia{
    //ini property/atribut
    public $warna;
    public $jk = "bangsat";

    //ini method/function
    public function makan () {
        echo "zaenal gelo";
    }
    public function data () {
        echo "zaenal seorang  $this->jk";
    }
}

// object

$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->data();
?>
