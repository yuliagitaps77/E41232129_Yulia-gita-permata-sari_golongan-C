<?php
// Deklarasi class ItemProduk sebagai class induk (parent)
class ItemProduk {
    // Deklarasi properti yang dimiliki oleh semua produk
    public $ukuran;
    public $warna;
    public $nama;

    // Method untuk mengatur ukuran
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    // Method untuk mengatur warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Method untuk mengatur nama produk
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan informasi tentang ukuran
    public function getUkuran() {
        return $this->ukuran;
    }

    // Method untuk mendapatkan informasi tentang warna
    public function getWarna() {
        return $this->warna;
    }

    // Method untuk mendapatkan informasi tentang nama
    public function getNama() {
        return $this->nama;
    }
}

// Deklarasi class Topi yang merupakan subclass dari ItemProduk
class Topi extends ItemProduk {
    // Deklarasi properti khusus untuk topi
    public $model;

    // Method untuk mengatur model topi
    public function setModel($model) {
        $this->model = $model;
    }

    // Method untuk mendapatkan informasi tentang model topi
    public function getModel() {
        return $this->model;
    }
}

// Deklarasi class Celana yang merupakan subclass dari ItemProduk
class Celana extends ItemProduk {
    // Deklarasi properti khusus untuk celana
    public $tipe;
    public $model;

    // Method untuk mengatur tipe celana
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // Method untuk mengatur model celana
    public function setModel($model) {
        $this->model = $model;
    }

    // Method untuk mendapatkan informasi tentang tipe celana
    public function getTipe() {
        return $this->tipe;
    }

    // Method untuk mendapatkan informasi tentang model celana
    public function getModel() {
        return $this->model;
    }
}

// Deklarasi class Baju yang merupakan subclass dari ItemProduk
class Baju extends ItemProduk {
    // Deklarasi properti khusus untuk baju
    public $tipe;

    // Method untuk mengatur tipe baju
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // Method untuk mendapatkan informasi tentang tipe baju
    public function getTipe() {
        return $this->tipe;
    }
}

// Demonstrasi penggunaan class Topi, Celana, dan Baju
echo "<strong>Topi:</strong><br>";
$topi = new Topi();
$topi->setNama("Topi Fedora");
$topi->setUkuran("L");
$topi->setWarna("Hitam");
$topi->setModel("Fedora");
echo "Nama: " . $topi->getNama() . "<br>";
echo "Ukuran: " . $topi->getUkuran() . "<br>";
echo "Warna: " . $topi->getWarna() . "<br>";
echo "Model: " . $topi->getModel() . "<br>";

echo "<hr><strong>Celana:</strong><br>";
$celana = new Celana();
$celana->setNama("Celana Jeans");
$celana->setUkuran("32");
$celana->setWarna("Biru");
$celana->setTipe("Jeans");
$celana->setModel("Slim Fit");
echo "Nama: " . $celana->getNama() . "<br>";
echo "Ukuran: " . $celana->getUkuran() . "<br>";
echo "Warna: " . $celana->getWarna() . "<br>";
echo "Tipe: " . $celana->getTipe() . "<br>";
echo "Model: " . $celana->getModel() . "<br>";

echo "<hr><strong>Baju:</strong><br>";
$baju = new Baju();
$baju->setNama("Kemeja Flanel");
$baju->setUkuran("M");
$baju->setWarna("Merah");
$baju->setTipe("Kemeja");
echo "Nama: " . $baju->getNama() . "<br>";
echo "Ukuran: " . $baju->getUkuran() . "<br>";
echo "Warna: " . $baju->getWarna() . "<br>";
echo "Tipe: " . $baju->getTipe() . "<br>";
?>
