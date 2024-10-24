<?php
// Kelas Induk: Hewan
class Hewan {
    private $nama;
    private $spesies;
    private $usia;

    public function __construct($nama, $spesies, $usia) {
        $this->nama = $nama;
        $this->spesies = $spesies;
        $this->usia = $usia;
    }

    public function getInfo() {
        return "Nama: " . $this->nama . ", Spesies: " . $this->spesies . ", Usia: " . $this->usia . " tahun";
    }
}
?>
