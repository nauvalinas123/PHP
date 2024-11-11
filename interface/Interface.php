<?php
require_once 'Lingkaran.php';
require_once 'Persegi.php';

$lingkaran = new Lingkaran(7);
$persegi = new Persegi(5);

echo "Luas Lingkaran:  " . $lingkaran->hitungLuas();
echo "<br>";
echo "Luas Persegi: " . $persegi->hitungLuas();