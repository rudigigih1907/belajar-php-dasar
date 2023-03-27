<?php 
// $name = "Anonimous" menjadikan variable $name jadi default ketika tidak ada valuenya.
function sayHello($name = "Anonimous") {
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Rudi");