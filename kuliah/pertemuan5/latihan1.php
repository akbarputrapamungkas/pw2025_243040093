<?php 
echo "waktu saat ini";
echo date("l, j M Y");
echo "<hr>";


echo "detik saat ini";
echo time();
echo "<br>";
echo "detik 1 hari dari sekarang";
echo time() + 60 * 60 * 24;
echo "<hr>";

echo 'hari ini :';
echo date('l');
echo '<br>';
echo '100 hari dari sekarang hari:';
echo date('l', time() + 60 * 60 * 24 * 100);
echo '<hr>';
echo date('l', mktime(9,0,0,7,4,2006));
echo '<hr>';










