<?php

class Kendaraan {
    protected $merek;
    protected $tahunProduksi;

    public function __construct($merek, $tahunProduksi) {
        $this->merek = $merek;
        $this->tahunProduksi = $tahunProduksi;
    }

    public function getInfo() {
        return "Merek: $this->merek, Tahun Produksi: $this->tahunProduksi";
    }

    public function ubahTahunProduksi($tahunBaru) {
        $this->tahunProduksi = $tahunBaru;
        echo "Tahun produksi telah diubah menjadi $this->tahunProduksi\n";
    }
}

