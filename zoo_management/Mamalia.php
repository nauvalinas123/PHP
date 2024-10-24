<?php
// Kelas Turunan: Mamalia
require_once 'Hewan.php'; // Mengimpor kelas Hewan

class Mamalia extends Hewan {
    private $jumlah_kaki;

    public function __construct($nama, $spesies, $usia, $jumlahKaki) {
        parent::__construct($nama, $spesies, $usia);
        $this->jumlah_kaki = $jumlahKaki;
    }

    public function getInfoMamalia() {
        return parent::getInfo() . ", Jumlah Kaki: " . $this->jumlah_kaki;
    }
}
?>
