<?php

// dengan kutip 1

echo 'Nama : ';
echo 'Ahdian Mirza Azri';
echo "\n";

// dengan kutip 2

echo "Nama : ";
echo "Ahdian Mirza Azri";
echo "\n";

echo "Nama : ";
echo "Ahdian\t Mirza\t Azri\n";

// Heredoc
echo <<<TEXT
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga

TEXT;

// Nowdoc
echo <<<'TEXT'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
TEXT;
