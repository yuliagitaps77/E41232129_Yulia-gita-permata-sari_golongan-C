<?php
// Kelas induk mobiLengkap
class MobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan, TV mencari channel, TV menampilkan gambar.<br>";
    }
    
    public function hidupkanMobil() {
        echo "Mobil dihidupkan.<br>";
    }
    
    public function matikanMobil() {
        echo "Mobil dimatikan.<br>";
    }
    
    public function ubahGigi() {
        echo "Gigi mobil diubah.<br>";
    }
}

// Kelas turunan MobilBMW
class MobilBMW extends MobilLengkap {
    // Bisa menambahkan method tambahan khusus untuk MobilBMW jika diperlukan
}

// Kelas untuk menguji MobilBMW
class MobilBMWberaksi {
    public function nontonTv(MobilBMW $mobil) {
        $mobil->nontonTV();
    }

    public function hidupkanMobil(MobilBMW $mobil) {
        $mobil->hidupkanMobil();
    }

    public function matikanMobil(MobilBMW $mobil) {
        $mobil->matikanMobil();
    }

    public function ubahGigi(MobilBMW $mobil) {
        $mobil->ubahGigi();
    }
}

// Contoh penggunaan
$mobilBMW = new MobilBMW();
$aksi = new MobilBMWberaksi();

$aksi->nontonTv($mobilBMW);
$aksi->hidupkanMobil($mobilBMW);
$aksi->ubahGigi($mobilBMW);
$aksi->matikanMobil($mobilBMW);
?>
