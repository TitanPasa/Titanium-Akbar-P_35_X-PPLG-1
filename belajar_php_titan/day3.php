<?php
$nilai = 99;

if($nilai <= 79 && $nilai >= 70)
{
    echo "C";
}
else if ($nilai <= 69 && $nilai >=0) {
    echo "D";
}
else if ($nilai <= 100 && $nilai >=90) {
    echo "A";
}
else if ($nilai <= 89 && $nilai >=80) {
    echo "B";
}
else {
    echo "Nlai Wjib Di Atas 0";
}

echo "<br></br>";

$jamsaatini = date("17"); 


if ($jamsaatini >= 0 && $jamsaatini < 4) {
    $waktu = "Dini Hari";
} elseif ($jamsaatini >= 4 && $jamsaatini < 10) {
    $waktu = "Pagi Hari";
} elseif ($jamsaatini >= 10 && $jamsaatini < 15) {
    $waktu = "Siang";
} elseif ($jamsaatini >= 15 && $jamsaatini < 18) {
    $waktu = "Sore";
} elseif ($jamsaatini >= 18 && $jamsaatini < 24) {
    $waktu = "Malam";
} else {
    $waktu = "Dunia lain Bos";
}


echo "Sekarang adalah jam: $jamsaatini:59 <br> Waktu: $waktu";

?>