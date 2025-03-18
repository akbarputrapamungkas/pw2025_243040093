<?php
// membuat array
$hari= array('senin', 'selasa', 'rabu');
$bulan=['Januari', 'februari', 'maret'];
$myArray=['Akbar', 39, true];


// mencetak / menampilkan array
// menampilkan seluruh isi (hanya untuk programer)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo '<br>';
// gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo '<br>';
echo $myArray[0];
echo '<hr>';

// menambahkan isi array
// gunakan []
$hari[]='kamis';
$bulan[]='april';
print_r($hari);
echo '<br>';
print_r($bulan);




















































