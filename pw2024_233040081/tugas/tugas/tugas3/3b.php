<?php

function UrutAngka($Angka) {
    $n = 1;
    for ($i = 0; $i <= $Angka; $i++){
        for ($f = 1; $f <= $i; $f++){
        echo $n ." ";
        $n++;

        }
        echo "<br>";
    }
}
UrutAngka(5);