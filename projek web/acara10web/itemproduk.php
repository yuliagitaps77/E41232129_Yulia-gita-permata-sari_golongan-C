<?php
// Kelas induk ItemProduk
class ItemProduk {
    public $ukuran;
    public $warna;
    public $nama;
    
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getInfo() {
        return "Nama: $this->nama, Ukuran: $this->ukuran, Warna: $this->warna";
    }
}

// Kelas turunan Topi
class Topi extends ItemProduk {
    public $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getInfo() {
        return parent::getInfo() . ", Model: $this->model";
    }
}

// Kelas turunan Celana
class Celana extends ItemProduk {
    public $tipe;
    public $model;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getInfo() {
        return parent::getInfo() . ", Tipe: $this->tipe, Model: $this->model";
    }
}

// Kelas turunan Baju
class Baju extends ItemProduk {
    public $tipe;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getInfo() {
        return parent::getInfo() . ", Tipe: $this->tipe";
    }
}

// Contoh penggunaan
$topi = new Topi();
$topi->setNama("Topi Pantai");
$topi->setUkuran("L");
$topi->setWarna("Merah");
$topi->setModel("Fedora");
echo $topi->getInfo() . "<br>";

$celana = new Celana();
$celana->setNama("Celana Jeans");
$celana->setUkuran("M");
$celana->setWarna("Biru");
$celana->setTipe("Skinny");
$celana->setModel("Modern");
echo $celana->getInfo() . "<br>";

$baju = new Baju();
$baju->setNama("Baju Kemeja");
$baju->setUkuran("L");
$baju->setWarna("Putih");
$baju->setTipe("Formal");
echo $baju->getInfo() . "<br>";
?>
