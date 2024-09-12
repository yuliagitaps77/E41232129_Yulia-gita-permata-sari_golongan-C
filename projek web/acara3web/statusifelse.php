<?php
function cekStatusDonor($berat_badan, $usia) {
    if ($berat_badan >= 50 && $usia >= 17 && $usia <= 60) {
        echo "Anda memenuhi syarat untuk mendonorkan darah.<br>";
    } else {
        echo "Maaf, Anda tidak memenuhi syarat untuk donor darah.<br>";
    }
}

// Memanggil fungsi cekStatusDonor
cekStatusDonor(55, 30); // Contoh: Berat badan 55 kg, usia 30 tahun
?>
