<?php
// $array[index] mengakses data array pada nomor index ke berapa
// $array[index] = value, Mengubah data di array pada nomor index dengan value baru
// $array[] = value , Menambah data di array pada posisi paling belakang
// unset($array[index]) Menghapus data di array, index otomatis hilang di array
// count($array) Mengambil total data di array
$values = array(10, 9, 8, 7, 5);
var_dump($values);

$names = ["Rudi", "Gigih", "Prabowo"];
var_dump($names);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

// Array sebagai Map
$rudi = array(
    0 => "Rudi",
    1 => "Gigih",
    2 => "Prabowo",
    3 => 27
);

$prabowo = array(
    "id" => "Rudi",
    "name" => "Rudi Gigih Prabowo",
    "age" => 28
);

var_dump($prabowo);

var_dump($prabowo["name"]);
