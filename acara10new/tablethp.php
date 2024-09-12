<?php
// Class Tablet dengan property public
class Tablet {
    public $merk;
    public $camera;
    public $memory;

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
    }
}

// Demonstrasi enkapsulasi Public
$hp = new Handphone();
$hp->merk = "Samsung";
$hp->camera = "12 MP";
$hp->memory = 64;
$hp->handphone_baru = "Samsung Galaxy S21";

// Mengakses property dan method yang public
$hp->infoTablet();
$hp->beliHandphone();
?>
