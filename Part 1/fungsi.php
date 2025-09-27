<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam."<br/>";
    echo " Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Salma", " Hallo");

echo "<hr/>";

$nama = "Salma";
$ucapanSalam = "Selamat pagi!";

perkenalan($nama);
?>