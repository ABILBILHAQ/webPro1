<?php
//konstanta untuk menilai judul
define("JUDUL", "Hitung luas lingkaran");
//konstanta untuk menilai header
define("PHI", 3.14);
echo JUDUL;
$r = 10;
echo "<br> jari-jari: $r<br>";
$luas = PHI * $r * $r;
echo "Luas lingkaran: $luas";
?>