<?php
function cekRiwayatDonor($riwayat) {
    foreach ($riwayat as $donasi) {
        if ($donasi == "Donasi Terakhir") {
            echo "Donasi terakhir ditemukan: $donasi.<br>";
            break; // Hentikan pencarian
        }
        if ($donasi == "Tidak Relevan") {
            continue; // Lompat ke iterasi berikutnya
        }
        echo "Memeriksa riwayat: $donasi.<br>";
    }
}

// Memanggil fungsi cekRiwayatDonor dengan array riwayat
$riwayat_donor = ["Donasi Lama", "Tidak Relevan", "Donasi Terakhir", "Donasi Baru"];
cekRiwayatDonor($riwayat_donor);
?>
