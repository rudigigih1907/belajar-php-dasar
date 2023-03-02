<?php 

// $a + $b -> Union, Menggabunkan array $a dan $b
// $a == $b -> Equality, bernilai true jika $a dan $b memiliki key-value sama
// $a === $b -> Identity, true jika $a dan $b memiliki key-value sama dan posisi sama
// $a != $b -> Inequality, true jika $a dan $b tidak sama
// $a <> $b -> Inequality, true jika $a dan $b tidak sama
// $a !== $b -> Nonidentity, true jika $a dan $b tidak identik
$first = [
    "first_name" => "Rudi"
];

$last = [
    "last_name" => "Gigih Prabowo"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Rudi",
    "lastname" => "Prabowo"
];

$b = [
    "lastname" => "Prabowo",
    "first_name" => "Rudi"
];

var_dump($a == $b);