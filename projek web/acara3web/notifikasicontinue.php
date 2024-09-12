<?php
function pengaturanNotifikasi($opsi) {
    $pengaturan = ["golongan_darah", "lokasi", "tanggal", "panggilan"];
    foreach ($pengaturan as $pengaturan_item) {
        if ($pengaturan_item == $opsi) {
            continue; // Lewati pengaturan ini
        }
        echo "Mengatur notifikasi untuk $pengaturan_item.<br>";
    }
}

// Memanggil fungsi pengaturanNotifikasi
pengaturanNotifikasi("tanggal"); // Akan melewati "tanggal" dan mengatur notifikasi untuk item lainnya.
?>
