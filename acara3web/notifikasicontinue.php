<?php
// Deklarasi fungsi pengaturanNotifikasi dengan parameter $opsi
function pengaturanNotifikasi($opsi) {
    // Deklarasi array $pengaturan berisi daftar pengaturan yang tersedia
    $pengaturan = ["golongan_darah", "lokasi", "tanggal", "panggilan"];

    // Menggunakan perulangan foreach untuk menelusuri setiap item dalam array $pengaturan
    foreach ($pengaturan as $pengaturan_item) {
        // Jika $pengaturan_item sama dengan nilai $opsi, maka lompat ke iterasi berikutnya
        if ($pengaturan_item == $opsi) {
            continue; // Lewati pengaturan ini (tidak diproses)
        }
        // Jika pengaturan tidak sama dengan $opsi, tampilkan pesan bahwa pengaturan diatur
        echo "Mengatur notifikasi untuk $pengaturan_item.<br>";
    }
}

// Memanggil fungsi pengaturanNotifikasi dengan argumen "tanggal"
// Fungsi akan melewati "tanggal" dan mengatur notifikasi untuk item lainnya
pengaturanNotifikasi("tanggal");
?>
