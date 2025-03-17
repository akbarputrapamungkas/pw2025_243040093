<?php
$i = 1;
for ($i = 1; $i <=2; $i= $i + 1) {
    for ($j = 1; $j <= 6; $j= $j + 1) {

        echo "$j ";
    }
    echo "<br>";
}
echo "<hr>";
$i = 1;
for ($i = 1; $i <= 5; $i = $i + 1) {
    for ($j = 1; $j <= $i; $j = $j + 1) {

        echo "$i ";
    }
    echo "<br>";
}
