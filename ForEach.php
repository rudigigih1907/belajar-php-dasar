<?php

$names = ["Rudi", "Gigih", "Prabowo"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Rudi",
    "middle_name" => "Gigih",
    "last_name" => "Prabowo"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}