<?php

/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */

function perolehan_medali($arr)
{
    $out = [];
    foreach ($arr as $data) {
        $key = array_search($data[0], array_column($out, 'negara'));
        if (!isset($out[$key]) or $out[$key]["negara"] !== $data[0]) {
            $out[] = ["negara" => $data[0]];
            $key = array_search($data[0], array_column($out, 'negara'));
            if (!isset($out[$key][$data[1]])) {
                $out[$key][$data[1]] = 1;
            } else {
                $out[$key][$data[1]] += 1;
            }
        }
    }
    return $out;
}


// TEST CASES
echo "<pre>";
print_r(perolehan_medali(
    array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas'),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas')
    )
));

echo "</pre>";
/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */

// print_r(perolehan_medali([])); // no data
