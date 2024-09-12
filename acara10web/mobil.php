<?php
// Deklarasi kelas parent (induk) mobilLengkap
class mobilLengkap {
    // Method nontonTV yang menampilkan proses menonton TV di mobil
    public function nontonTV() {
        echo "TV dihidupkan...<br>";
        echo "TV Mencari Chanel...<br>";
        echo "TV Menampilkan gambar...<br>";
    }

    // Method untuk menghidupkan mobil
    public function hidupkanMobil() {
        echo "Mobil dihidupkan...<br>";
    }

    // Method untuk mematikan mobil
    public function matikanMobil() {
        echo "Mobil dimatikan...<br>";
    }

    // Method untuk mengubah gigi mobil
    public function ubahGigi($gigi) {
        echo "Gigi mobil diubah ke: $gigi<br>";
    }
}

// Deklarasi kelas MobilBMW yang merupakan inherit (turunan) dari mobilLengkap
class MobilBMW extends mobilLengkap {
    // Kelas ini mewarisi semua method dari mobilLengkap
}

// Kelas MobilBMWberaksi untuk mendemonstrasikan penggunaan kelas MobilBMW
class MobilBMWberaksi {
    public function nontonTv() {
        // Membuat objek dari kelas MobilBMW
        $mobilBMW = new MobilBMW();
        // Memanggil method nontonTV dari class MobilBMW
        $mobilBMW->nontonTV();
    }

    public function hidupkanMobil() {
        // Membuat objek dari kelas MobilBMW
        $mobilBMW = new MobilBMW();
        // Memanggil method hidupkanMobil dari class MobilBMW
        $mobilBMW->hidupkanMobil();
    }

    public function matikanMobil() {
        // Membuat objek dari kelas MobilBMW
        $mobilBMW = new MobilBMW();
        // Memanggil method matikanMobil dari class MobilBMW
        $mobilBMW->matikanMobil();
    }

    public function ubahGigi($gigi) {
        // Membuat objek dari kelas MobilBMW
        $mobilBMW = new MobilBMW();
        // Memanggil method ubahGigi dari class MobilBMW
        $mobilBMW->ubahGigi($gigi);
    }
}

// Demonstrasi penggunaan kelas MobilBMWberaksi
$aksi = new MobilBMWberaksi();

// Memanggil berbagai metode untuk mendemonstrasikan fungsionalitas
echo "<strong>Aksi Nonton TV:</strong><br>";
$aksi->nontonTv();

echo "<hr><strong>Aksi Hidupkan Mobil:</strong><br>";
$aksi->hidupkanMobil();

echo "<hr><strong>Aksi Matikan Mobil:</strong><br>";
$aksi->matikanMobil();

echo "<hr><strong>Aksi Ubah Gigi Mobil:</strong><br>";
$aksi->ubahGigi(3);  // Misalnya ubah gigi ke-3
?>
