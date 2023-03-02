<?php

$data = [
    // "action" => "create"
];

// tanpa Null Coalescing Operator
if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}
echo $action . PHP_EOL;

// Null Coalescing Operator
$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;