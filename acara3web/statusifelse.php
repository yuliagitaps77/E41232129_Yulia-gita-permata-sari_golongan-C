<?php
// Deklarasi fungsi cekStatusDonor dengan dua parameter: $berat_badan dan $usia
function cekStatusDonor($berat_badan, $usia) {
    // Memeriksa apakah berat badan >= 50, usia >= 17, dan usia <= 60
    if ($berat_badan >= 50 && $usia >= 17 && $usia <= 60) {
        // Jika kondisi terpenuhi, cetak pesan bahwa pengguna memenuhi syarat untuk donor darah
        echo "Anda memenuhi syarat untuk mendonorkan darah.<br>";
    } else {
        // Jika salah satu kondisi tidak terpenuhi, cetak pesan bahwa pengguna tidak memenuhi syarat
        echo "Maaf, Anda tidak memenuhi syarat untuk donor darah.<br>";
    }
}

// Memanggil fungsi cekStatusDonor dengan nilai berat badan 55 dan usia 30
cekStatusDonor(55, 30); // Contoh: Berat badan 55 kg, usia 30 tahun
?>
