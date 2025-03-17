<?php

function UrutanAngka($angka)
{
    $angkaurut = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angkaurut++ . " ";
        }
        echo ("<br>");
    }
}
UrutanAngka(5);
