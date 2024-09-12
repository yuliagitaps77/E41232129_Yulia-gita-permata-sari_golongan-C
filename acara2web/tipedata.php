<?php
// Mendefinisikan variabel $x dengan nilai 5985 dan menampilkan tipe dan nilai variabel tersebut
$x = 5985;
var_dump($x); // output: int (5985)
echo "<br>";

// Mengubah nilai $x menjadi -345 (bilangan negatif) dan menampilkan tipe dan nilai variabel tersebut
$x = -345; // negative number
var_dump($x); // Output: int(-345)
echo "<br>";

// Mengubah nilai $x menjadi 0x8C  (bilangan heksadesimal) dan menampilkan tipe dan nilai variabel tersebut
$x = 0x8C; // hexadecimal number
var_dump($x); // Output: int(140) - 0x8C dalam desimal adalah 140
echo "<br>";

// Mengubah nilai $x menjadi 047 (bilangan oktal) dan menampilkan tipe dan nilai variabel tersebut
$x = 047; // octal number
var_dump($x); // Output: int(39) - 047 dalam desimal adalah 39

// Mengubah nilai $x menjadi 10.365 (bilangan desimal dengan titik desimal) dan menampilkan tipe dan nilai variabel tersebut 
$x = 10.365;
var_dump($x); // Output: float(10.365)
echo "<br>";

// Mengubah nilai $x menjadi 2.4e3 (bilangan desimal dengan notasi eksponensial) dan menampilkan tipe dan nilai variabel tersebut 
$x = 2.4e3;
var_dump($x); // Output: float(2400) - 2.4e3 adalah 4000 dalam desimal
echo "<br>";

// Mengubah nilai $x menjadi 8E-5 (bilangan desimal dengan notasi eksponensial negatif) dan menampilkan tipe dan nilai variabel tersebut
$x = 8E-5;
var_dump($x); // Output: float(0.00008) - 8E-5 adalah 0.00008 dalam desimal
echo "<br>";

// Menampilkan panjang string "Hello world!"
echo strlen("Hello world!"); // Output: 12
//Menampilkan posisi pertama kemunculan substring "world" dalam string "Hello world"
echo strpos("Hello world!","world"); // Output: 6 - "world" dimulai pada indeks ke-6 dalam string
?>