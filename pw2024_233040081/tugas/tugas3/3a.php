<?php

echo "<h4>menghitung luas lingkaran</h4>";
function HitungLuasLingkaran($l) {
    echo "Jari-Jari = $l cm <br>";
    echo "Luas lingkaran =" . (3.14 * $l * $l) . "cm2 <hr>";
}

hitungLuasLingkaran(10);

echo "h4>MenghitungKelilingLingkaran</h4>";
function MenghitungKelilingLingkaran($l) {
    echo "Jari-Jari = $l cm <br>";
    echo "Keliling lingkaran =" . (3.14 * $l * $l) . "cm <hr>";
}

MenghitungKelilingLingkaran(20);