<?php
// Deklarasi fungsi terbesar yang menerima dua parameter: $a dan $b
function terbesar($a, $b) {
    // Kondisi if untuk memeriksa apakah $a lebih besar dari $b
    if($a > $b) {
        // Jika $a lebih besar, kembalikan nilai $a
        return $a;
    } else {
        // Jika $b lebih besar atau sama dengan $a, kembalikan nilai $b
        return $b;
    }
}

// Mendeklarasikan variabel $bil1 dan $bil2 dengan nilai masing-masing 100 dan 150
$bil1 = 100;
$bil2 = 150;

// Memanggil fungsi terbesar dan mencetak hasilnya (bilangan terbesar)
echo "Bilangan terbesar adalah: " . terbesar($bil1, $bil2);
?>
