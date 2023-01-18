<?php 

// Single Qoute atau kutip satu
echo 'Nama : ';
echo 'Rudi Gigih Prabowo';
echo "\n";

// Duoble Qoute atau kutip dua
echo "Nama : ";
echo "Rudi\t Gigih\t Prabowo\n";

// Multi line String
echo <<<RUDI
Nama Saya Rudi Gigih Prabowo
Belajar Type Data String
Ini cara membuat string membuat heredoc\n
RUDI;

echo <<<'PRABOWO'
Nama Saya Rudi Gigih Prabowo
Belajar Type Data String
Ini cara membuat string membuat heredoc\n
PRABOWO;