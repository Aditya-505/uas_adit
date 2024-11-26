<?php

$day = date ("D");
// echo $day . "<br>";
switch ($day) {
    case 'Mon': $day = "senin";
        break;
    case 'Tue': $day = "selasa";
        break;
    case 'Wed': $day = "rabu";
        break;
    case 'Thu': $day = "kamis";
        break; 
    case 'Fri': $day = "jumat";
        break;
    case 'Set': $day = "sabtu";
        break; 
    case 'Sun': $day = "minggu";
        break;
    default :
    $day = "kiamat";
}
echo "hari ini hari $day";    

?>