<?php

class Perpustakaan {
    private $daftar_Buku_23111100002 = [];

    public function tambahBuku(Buku $buku) {
        $this->daftar_Buku_23111100002[] = $buku;
    }

    public function daftarBukuTersedia() {
        foreach ($this->daftar_Buku_23111100002 as $buku) {
            echo "Judul: " . $buku->getJudul() . ", Pengarang: " . $buku->getPengarang() . ", Status: " . $buku->getStatus() . "\n";
        }
    }

    public function pinjamBuku(Anggota $anggota, Buku $buku) {
        $anggota->pinjamBuku($buku);
    }

    public function kembalikanBuku(Anggota $anggota, Buku $buku) {
        $anggota->kembalikanBuku($buku);
        echo $anggota->getNama() . " Mengembalikkan buku " . $buku->getJudul();
    }
}
