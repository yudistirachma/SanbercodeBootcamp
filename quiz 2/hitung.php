<?php
function hitung($string_data)
{
    if (strpos($string_data, "*")) {

        $angka =  explode("*", $string_data);
        return $angka[0] * $angka[1];
    } elseif (strpos($string_data, "+")) {
        $angka =  explode("+", $string_data);
        return $angka[0] + $angka[1];
    } elseif (strpos($string_data, "-")) {
        $angka =  explode("-", $string_data);
        return $angka[0] - $angka[1];
    } elseif (strpos($string_data, ":")) {
        $angka =  explode(":", $string_data);
        return $angka[0] / $angka[1];
    } elseif (strpos($string_data, "%")) {
        $angka =  explode("%", $string_data);
        return $angka[0] % $angka[1];
    } else {
        return "tidak mampu di proses";
    }
}

// TEST CASES
echo "<br>" . hitung("102*2"); //204
echo "<br>" . hitung("2+3"); //5
echo "<br>" . hitung("100:25"); //4
echo "<br>" . hitung("10%2"); //0
echo "<br>" . hitung("99-2"); //97


// peseoude code
// 1. buat functon hitung dengan parameter $string_data
// 2. cek apakah di $string_data mengandung karakter * menggunakan strpos()
// 3. jika iya maka bagi dua $string_data berdasarkan karakter *  menggunakan  explode() dan akan menjadi aray yang di tampung di $angka
// 4. lalu retrun hasil function hitung dengan menghitung $angka[0] di kali $angka[1]

// 5. jika tidak cek apakah di $string_data mengandung karakter + menggunakan strpos()
// 6. jika iya maka bagi dua $string_data berdasarkan karakter +  menggunakan  explode() dan akan menjadi aray yang di tampung di $angka
// 7. lalu retrun hasil function hitung dengan menghitung $angka[0] di tambah $angka[1]

// 8. jika tidak cek apakah di $string_data mengandung karakter - menggunakan strpos()
// 9. jika iya maka bagi dua $string_data berdasarkan karakter -  menggunakan  explode() dan akan menjadi aray yang di tampung di $angka
// 10. lalu retrun hasil function hitung dengan menghitung $angka[0] di kurang $angka[1]

// 11. jika tidak cek apakah di $string_data mengandung karakter : menggunakan strpos()12. jika iya maka bagi dua $string_data berdasarkan karakter :  menggunakan  explode() dan akan menjadi aray yang di tampung di $angka
// 13. lalu retrun hasil function hitung dengan menghitung $angka[0] di bagi $angka[1]

// 14. jika tidak cek apakah di $string_data mengandung karakter % menggunakan strpos()
// 15. jika iya maka bagi dua $string_data berdasarkan karakter %  menggunakan  explode() dan akan menjadi aray yang di tampung di $angka
// 16. lalu retrun hasil function hitung dengan menghitung $angka[0] modulus $angka[1]

// 17. jika tidak maka tampilkan pesan "tidak mampu di proses"

// 18. test case dengan perintah 
// echo "<br>" . hitung("102*2"); //204
// echo "<br>" . hitung("2+3"); //5
// echo "<br>" . hitung("100:25"); //4
// echo "<br>" . hitung("10%2"); //0
// echo "<br>" . hitung("99-2"); //97
