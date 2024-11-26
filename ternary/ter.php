<?php

$years = 2023;

// ternary
$kabisat = $years % 4 == 0 ? 'kabisat' : "bukan kabisat";

echo "$years bukan tahun $kabisat";

?>