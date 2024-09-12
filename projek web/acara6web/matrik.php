<?php
// Definisikan matriks A dan B
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Buat matriks kosong untuk menyimpan hasil penjumlahan
$C = [];

// Looping melalui setiap baris dan kolom untuk menjumlahkan matriks
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j]; // Penjumlahan elemen
    }
}

// Tampilkan hasil penjumlahan matriks
echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " "; // Cetak elemen matriks hasil
    }
    echo "<br>"; // Ganti baris untuk matriks berikutnya
}
?>
