<?php
// Class Tablet dengan property private
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    // Method untuk mengatur informasi tablet
    public function setInfoTablet($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    // Method untuk menampilkan informasi tablet
    public function infoTablet() {
        echo "Merk Tablet: " . $this->merk . "<br>";
        echo "Kamera: " . $this->camera . "<br>";
        echo "Memory: " . $this->memory . " GB<br>";
    }
}

// Class Handphone yang mewarisi Tablet
class Handphone extends Tablet {
    public $handphone_baru;

    // Method untuk membeli handphone
    public function beliHandphone() {
        echo "Anda membeli handphone baru dengan merk " . $this->handphone_baru . "<br>";
        // Tidak bisa mengakses property $merk langsung karena bersifat private
        $this->infoTablet(); // Bisa mengakses infoTablet yang public
    }
}

// Demonstrasi enkapsulasi Private
$hp = new Handphone();
$hp->setInfoTablet("Xiaomi", "48 MP", 256);  // Menggunakan method setter
$hp->handphone_baru = "Xiaomi Mi 11";

// Mengakses method untuk membeli handphone dan melihat info tablet
$hp->beliHandphone();
?>
