<?php
function skor_terbesar($arr)
{
    $newArray = array();

    foreach ($arr as $product) {
        if (!isset($product[$product["kelas"]])) {
            $newArray[$product["kelas"]] = array(
                "nama" => $product["nama"],
                "kelas" => $product["kelas"],
                "nilai" => $product["nilai"]
            );
            continue;
        } else {
            if ($newArray[$product["kelas"]]["nilai"] < $product["nilai"]) {
                $newArray[$product["kelas"]]["nilai"] = $product["nilai"];
            }
        }
    }
    return $newArray;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ]
];

var_dump(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
