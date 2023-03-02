<?php

$name = "Rudi Gigih Prabowo";

// Menggabungkan String
echo "Name : ". $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;
echo $name;
echo "\n";

// Konversi Ke Number dan Sebaliknya
$ValueString = (string)100;
var_dump($ValueString);

$ValueInt = (int)$ValueString;
var_dump($ValueInt);

$ValueFloat = (float)$ValueString;
var_dump($ValueFloat);

// Mengakses Karakter
$name = "Rudi";
echo $name[0] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[1] . PHP_EOL;

// Variable Parsing
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name" . ", Selamat Belajar PHP" . PHP_EOL;

// Curly Brace
echo "Hello {$name}s" . ", Selamat Belajar PHP" . PHP_EOL;