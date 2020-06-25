<?php
function pasangan_terbesar($angka)
{
    $panjang =  strlen($angka);
    $string = strval($angka);
    $angkaCekAwal = $string[0] . $string[1];

    for ($i = 0; $i < $panjang - 2; $i++) {
        $angkaBaru = $string[$i + 1] . $string[$i + 2];
        if ($angkaCekAwal < $angkaBaru) {
            $angkaCekAwal = $angkaBaru;
        }
    }
    echo ($angkaCekAwal) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
