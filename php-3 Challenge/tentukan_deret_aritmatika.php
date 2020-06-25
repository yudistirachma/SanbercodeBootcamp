<?php
function tentukan_deret_aritmatika($arr)
{
    $n = count($arr);
    // kode di sini
    if ($n == 1)
        return true;

    // Sort array 
    sort($arr);

    // setalah sort array
    $d = $arr[1] - $arr[0];
    for ($i = 2; $i < $n; $i++)
        if (
            $arr[$i] -
            $arr[$i - 1] != $d
        )
            return "false <br>";

    return "true <br>";
}

// TEST CASES
print tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
print tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
