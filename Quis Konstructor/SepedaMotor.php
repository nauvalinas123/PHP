<?php
require_once "Kendaraan.php";

class SepedaMotor extends Kendaraan {
    private $tipeMesin;

    public function __construct($merek, $tahunProduksi, $tipeMesin) {
        parent::__construct($merek, $tahunProduksi);
        $this->tipeMesin = $tipeMesin;
    }

    public function getInfo() {
        return parent::getInfo() . "\nTipe Mesin: $this->tipeMesin";
    }
}