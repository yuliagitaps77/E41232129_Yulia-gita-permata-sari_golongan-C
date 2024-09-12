<?php
// Class Tablet dengan property protected
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    // Method untuk mengatur informasi tablet
    public function setInfoTablet($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    // Method untuk menampilkan informasi tablet
    protected function infoTablet() {
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
        $this->infoTablet(); // Memanggil method protected dari parent class
    }
}

// Demonstrasi enkapsulasi Protected
$hp = new Handphone();
$hp->setInfoTablet("Apple", "16 MP", 128);  // Menggunakan method setter
$hp->handphone_baru = "iPhone 12";

// Mengakses method yang protected melalui subclass
$hp->beliHandphone();
?>
