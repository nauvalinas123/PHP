<?php
require_once 'Perpustakaan.php';
require_once 'Buku.php';
require_once 'Anggota.php';

$perpustakaan = new Perpustakaan;

$buku1 = new Buku("Pemograman PHP", "Andi", 2020);
$buku2 = new Buku("Desain Basis Data", "Budi", 2021);

$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

$anggota1 = new Anggota("Yoga", "MHS00006");
$anggota2 = new Anggota("Yogi", "MHS00002");

// Daftar buku sebelum peminjaman
echo "Daftar Buku Sebelum Peminjaman:\n";
$perpustakaan->daftarBukuTersedia();

echo "\n";

// Peminjaman buku
$perpustakaan->pinjamBuku($anggota1, $buku1);
$perpustakaan->pinjamBuku($anggota2, $buku2);

echo "Daftar Buku Setelah Peminjaman:\n";
$perpustakaan->daftarBukuTersedia();

echo "\nBuku yang Dipinjam oleh " . $anggota2->getNama() . ":\n";
foreach ($anggota2->getBukuDipinjam() as $buku) {
    echo $buku1->getJudul() . "\n";
}

echo "\nDaftar Buku Setelah Pengembalian:\n";
$perpustakaan->kembalikanBuku($anggota2, $buku1);
echo "\n";
$perpustakaan->daftarBukuTersedia();
