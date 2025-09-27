<?php
function tampilAngka(int $jumlah, int $indeks) {
    echo "Angka ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilAngka($jumlah, $indeks + 1);
    }
}

tampilAngka(20, 1);
?>