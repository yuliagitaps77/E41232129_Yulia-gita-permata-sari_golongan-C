<?php  
function pilihLokasiDonor($cabang) {
    switch ($cabang) {
        case "Jakarta":
            echo "Anda memilih cabang Jakarta.<br>";
            break;
        case "Bandung":
            echo "Anda memilih cabang Bandung.<br>";
            break;
        case "Surabaya":
            echo "Anda memilih cabang Surabaya.<br>";
            break;
        default:
            echo "Cabang tidak ditemukan.<br>";
    }
}

// Memanggil fungsi pilihLokasiDonor
pilihLokasiDonor("Jakarta"); 
pilihLokasiDonor("Bandung"); 
pilihLokasiDonor("Surabaya"); 
pilihLokasiDonor("Malang"); 
?>
