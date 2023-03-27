<?php 

function sayHello($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Rudi");
sayHello("Budi");
sayHello("Rudi", "Gigih");

// Type Declaration
// Ketika mencoba mengirimkan data yang bukan "integer" maka PHP akan melakukan konversi data ke integer
function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], []); // error karena type data nya adalah int, sementara yang dimasukan adalah type data array. PHP tidak bisa mengkorvesi type data array ke integer.


// Variable-length argument list -> parameter yang menerima banyak value, secara otomatis akan membuat argument tersebut menjadi array
// namun kita tidak perlu manual mengirim array ke functionnya.
// hanya bisa dilakukan di argument posisi terakhir.
// menggunakan tanda "..." titik tiga kali sebelum nama argument
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value)
    {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL; // Implode -> merubah array menjadi string
}

$values = [1,2,3,4,5];
sumAll(1,2,3,4,5);
sumAll(...$values);