<?php

function papan_catur($angka)
{
    // tulis kode di sini
    for ($baris = 1; $baris <= $angka; $baris++) {
        if ($baris % 2 == 0) {
            echo "&nbsp";
            for ($colom = 1; $colom <= $angka - 1; $colom++) {
                echo " # ";
            }
        } else {
            for ($colom = 1; $colom <= $angka; $colom++) {
                echo " # ";
            }
        }

        echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/