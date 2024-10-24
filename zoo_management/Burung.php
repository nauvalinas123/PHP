<?php
// Kelas Turunan: Burung
require_once 'Hewan.php'; // Mengimpor kelas Hewan

class Burung extends Hewan {
    private $panjang_sayap;

    public function __construct($nama, $spesies, $usia, $panjangSayap) {
        parent::__construct($nama, $spesies, $usia);
        $this->panjang_sayap = $panjangSayap;
    }

    public function getInfoBurung() {
        return parent::getInfo() . ", Panjang Sayap: " . $this->panjang_sayap . " cm";
    }
}
?>
