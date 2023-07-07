<?php

// single quote

echo 'Nama : ';
echo 'Fajar Fadilah';

// double quote

echo "Nama : ";
echo "Fajar Fadilah";

// escape squence

echo "\nNama : \n";
echo "Fajar\t Fadilah\n";

// multi line string

// Heredoc
echo <<<TEXT

selamat belajar PHP
belajae membuat string
ini adalah cara ke-3 membuat "string"
dengan menggunakan heredoc

TEXT;

// Nowdoc

echo <<<'TEXT'

selamat belajar PHP
belajae membuat string
ini adalah cata ke-4 membuat "string"
dengan menggunakan nowredoc

TEXT;

