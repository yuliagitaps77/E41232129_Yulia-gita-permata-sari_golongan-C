<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    protected function infoTablet() {
        return "Merk: $this->merk, Kamera: $this->camera, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($status) {
        $this->handphone_baru = $status;
        return $this->infoTablet() . ", Status: " . ($this->handphone_baru ? "Baru" : "Bekas");
    }
}

$hp = new Handphone("iPhone", 12, 256);
echo $hp->beliHandphone(false);
?>
