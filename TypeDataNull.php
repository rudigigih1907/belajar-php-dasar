<?php

$name = "Rudi";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "rudi";
unset($contoh);
echo $contoh;
echo "\n";

var_dump(isset($contoh));