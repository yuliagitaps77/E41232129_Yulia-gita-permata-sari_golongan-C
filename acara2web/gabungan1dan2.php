<?php
$tugas1 = 90;   // Deklarasi variabel $tugas1 dengan nilai 90
$tugas2 = 80;   // Deklarasi variabel $tugas2 dengan nilai 80
$jumlah = $tugas1 + $tugas2;  // Menjumlahkan nilai $tugas1 dan $tugas2, disimpan dalam $jumlah
$rerata = $jumlah / 2 ;       // Menghitung rata-rata nilai, disimpan dalam $rerata

// Menampilkan nilai tugas 1
echo "Nilai Tugas I : " . $tugas1 . "<br>";  
// Menampilkan nilai tugas 2
echo "Nilai Tugas II: " . $tugas2 . "<br>";  
// Menampilkan jumlah nilai dari tugas 1 dan tugas 2
echo "Jumlah Tugas : " . $jumlah . "<br>";  
// Menampilkan rata-rata nilai tugas
echo "Rerata Tugas : " . $rerata;

// Menggabungkan nilai tugas 1 dan tugas 2 sebagai string
$gabungan = $tugas1 . $tugas2;  
// Menampilkan hasil penggabungan string dari tugas 1 dan tugas 2
echo "Gabungan Tugas 1 dan Tugas 2 : " . $gabungan;  
?>
