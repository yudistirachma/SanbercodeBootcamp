
<?php

function palindrome_angka($angka)
{
    // tulis kode di sini
    for ($angka1 = $angka; $angka1 < 99999999; $angka1++) {

        if ($angka1 == strrev($angka1)) {
            echo "polidrome setelah dari angka {$angka} adalah {$angka1} <br>";
            break;
        }
    }
}


// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>