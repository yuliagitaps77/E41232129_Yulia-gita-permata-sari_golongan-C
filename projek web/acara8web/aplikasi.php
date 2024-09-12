<?php
// Definisikan kelas Kalkulator
class Kalkulator {
    // Properti
    private $angka1;
    private $angka2;

    // Konstruktor untuk inisialisasi nilai
    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    // Metode untuk penjumlahan
    public function penjumlahan() {
        return $this->angka1 + $this->angka2;
    }

    // Metode untuk pengurangan
    public function pengurangan() {
        return $this->angka1 - $this->angka2;
    }

    // Metode untuk perkalian
    public function perkalian() {
        return $this->angka1 * $this->angka2;
    }

    // Metode untuk pembagian
    public function pembagian() {
        if ($this->angka2 != 0) {
            return $this->angka1 / $this->angka2;
        } else {
            return "Tidak bisa dibagi dengan nol!";
        }
    }
}

// Contoh penggunaan kelas Kalkulator
$angka1 = 10;
$angka2 = 5;

// Membuat objek dari kelas Kalkulator
$kalkulator = new Kalkulator($angka1, $angka2);

// Menampilkan hasil perhitungan
echo "Angka 1: " . $angka1 . "<br>";
echo "Angka 2: " . $angka2 . "<br>";

echo "Hasil Penjumlahan: " . $kalkulator->penjumlahan() . "<br>";
echo "Hasil Pengurangan: " . $kalkulator->pengurangan() . "<br>";
echo "Hasil Perkalian: " . $kalkulator->perkalian() . "<br>";
echo "Hasil Pembagian: " . $kalkulator->pembagian() . "<br>";

?>
