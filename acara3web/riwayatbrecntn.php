<?php
// Deklarasi fungsi cekRiwayatDonor dengan parameter $riwayat yang berupa array
function cekRiwayatDonor($riwayat) {
    // Menggunakan perulangan foreach untuk menelusuri setiap elemen dalam array $riwayat
    foreach ($riwayat as $donasi) {
        // Jika elemen adalah "Donasi Terakhir", cetak pesan dan hentikan perulangan
        if ($donasi == "Donasi Terakhir") {
            echo "Donasi terakhir ditemukan: $donasi.<br>";
            break; // Hentikan pencarian karena "Donasi Terakhir" sudah ditemukan
        }
        // Jika elemen adalah "Tidak Relevan", lompat ke iterasi berikutnya
        if ($donasi == "Tidak Relevan") {
            continue; // Lompat ke iterasi berikutnya tanpa menampilkan pesan
        }
        // Jika kondisi di atas tidak terpenuhi, cetak riwayat yang sedang diperiksa
        echo "Memeriksa riwayat: $donasi.<br>";
    }
}

// Membuat array $riwayat_donor dengan beberapa data riwayat donasi
$riwayat_donor = ["Donasi Lama", "Tidak Relevan", "Donasi Terakhir", "Donasi Baru"];

// Memanggil fungsi cekRiwayatDonor dengan array $riwayat_donor
cekRiwayatDonor($riwayat_donor);
?>
