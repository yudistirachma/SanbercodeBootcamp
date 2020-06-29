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
        // $key = array_search($data[0], array_column($out, 'negara'));
        $out = [];
        if (isset($out[$data[0]]) == 0) {
            $out[$data[0]] = ["negara" => $data[0], "emas" => 0, "perak" => 0, "perunggu" => 0];

            if ($data[1] == "emas") {
                $out[$data[0]]["emas"] += 1;
            } elseif ($data[1] = "perak") {
                $out[$data[0]]["perak"] += 1;
            } elseif ($data[1] == "perunggu") {
                $out[$data[0]]["perunggu"] += 1;
            }
        } else {
            if ($data[1] == "emas") {
                $out[$data[0]]["emas"] += 1;
            } elseif ($data[1] = "perak") {
                $out[$data[0]]["perak"] += 1;
            } elseif ($data[1] == "perunggu") {
                $out[$data[0]]["perunggu"] += 1;
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
