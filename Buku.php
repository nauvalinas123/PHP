<?php
class Buku {
    private $judul_23111100002;
    private $pengarang_23111100002;
    private $tahunTerbit_23111100002;
    private $statusTersedia_23111100002;

    public function __construct($judul_23111100002, $pengarang_23111100002, $tahunTerbit_23111100002) {
        $this->judul_23111100002 = $judul_23111100002;
        $this->pengarang_23111100002 = $pengarang_23111100002;
        $this->tahunTerbit_23111100002 = $tahunTerbit_23111100002;
        $this->statusTersedia_23111100002 = true;
    }

    public function getJudul() {
        return $this->judul_23111100002;
    }

    public function getPengarang() {
        return $this->pengarang_23111100002;
    }

    public function isTersedia() {
        return $this->statusTersedia_23111100002;
    }

    public function pinjamBuku() {
        if ($this->statusTersedia_23111100002) {
            $this->statusTersedia_23111100002 = true;
            return false;
        }
           
    }

    public function kembalikanBuku() {
        $this->statusTersedia_23111100002 = true;
    }

    public function getStatus() {
        return $this->statusTersedia_23111100002 ? "Tersedia" : "Dipinjam";
    }
}
