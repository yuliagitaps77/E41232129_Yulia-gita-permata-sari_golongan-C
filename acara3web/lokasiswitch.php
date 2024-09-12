<?php  
// Deklarasi fungsi pilihLokasiDonor dengan parameter $cabang
function pilihLokasiDonor($cabang) {
    // Menggunakan switch untuk mengecek nilai $cabang
    switch ($cabang) {
        case "Jakarta":  // Jika $cabang bernilai "Jakarta"
            echo "Anda memilih cabang Jakarta.<br>";  // Menampilkan pesan cabang Jakarta
            break;  // Menghentikan eksekusi switch setelah menemukan kecocokan
        case "Bandung":  // Jika $cabang bernilai "Bandung"
            echo "Anda memilih cabang Bandung.<br>";  // Menampilkan pesan cabang Bandung
            break;  // Menghentikan eksekusi switch
        case "Surabaya":  // Jika $cabang bernilai "Surabaya"
            echo "Anda memilih cabang Surabaya.<br>";  // Menampilkan pesan cabang Surabaya
            break;  // Menghentikan eksekusi switch
        default:  // Jika $cabang tidak cocok dengan nilai yang ada di case
            echo "Cabang tidak ditemukan.<br>";  // Menampilkan pesan jika cabang tidak valid
    }
}

// Memanggil fungsi pilihLokasiDonor dengan berbagai argumen
pilihLokasiDonor("Jakarta");   // Memanggil fungsi dengan argumen "Jakarta"
pilihLokasiDonor("Bandung");   // Memanggil fungsi dengan argumen "Bandung"
pilihLokasiDonor("Surabaya");  // Memanggil fungsi dengan argumen "Surabaya"
pilihLokasiDonor("Malang");    // Memanggil fungsi dengan argumen "Malang" yang tidak ada dalam case, akan masuk ke default
?>
