<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function infoTablet() {
        return "Merk: $this->merk, Kamera: $this->camera, Memory: $this->memory GB";
    }

    public function getTabletInfo() {
        return $this->infoTablet();
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($status) {
        $this->handphone_baru = $status;
        return $this->getTabletInfo() . ", Status: " . ($this->handphone_baru ? "Baru" : "Bekas");
    }
}

$hp = new Handphone("Oppo", 8, 64);
echo $hp->beliHandphone(true);
?>
