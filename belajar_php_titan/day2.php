<?php
$angka1 = "1";
$angka2 = "2";
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$kurang = $angka1 - $angka2;

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka1 : $angka2 = $bagi";
echo "<br> $angka1 - $angka2 = $kurang";
echo "<br>  $angka1<sup>$angka2</sup> = ";
echo pow($angka1,$angka2);
echo "<br>";
echo pow(3,5);
?>