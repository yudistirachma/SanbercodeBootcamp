<?php
require "Animal.php";
require "Frog.php";
require "Ape.php";

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
print_r($sheep->cold_blooded);  // false
echo "<br>";


// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";


$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
