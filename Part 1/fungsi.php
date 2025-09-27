<?php
function perkenalan($nama, $salam){
    echo $salam;
    echo " Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Salma", "Hallo ");

echo "<hr>";

$saya = "Salma";
$ucapanSalam = "Selamat pagi!";

perkenalan($saya, $ucapanSalam);
?>