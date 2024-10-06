<?php

class Anggota {
    private $nama_23111100002;
    private $nomor_Anggota_23111100002;
    private $buku_Dipinjam_23111100002 = [];

    public function __construct($nama_23111100002, $nomor_Anggota_23111100002) {
        $this->nama_23111100002 = $nama_23111100002;
        $this->nomor_Anggota_23111100002 = $nomor_Anggota_23111100002;
    }

    public function pinjamBuku(Buku $buku) {
        if ($buku->isTersedia()) {
            $buku->pinjamBuku();
            $this->buku_Dipinjam_23111100002[] = $buku;
        }
    }

    public function kembalikanBuku(Buku $buku) {
        if (($key = array_search($buku, $this->buku_Dipinjam_23111100002)) !== false) {
            unset($this->buku_Dipinjam_23111100002[$key]);
            $buku->kembalikanBuku();
        }
    }

    public function getBukuDipinjam() {
        return $this->buku_Dipinjam_23111100002;
    }

    public function getNama() {
        return $this->nama_23111100002;
    }
}
