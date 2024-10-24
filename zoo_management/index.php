<?php
// Memuat kelas-kelas
require_once 'Hewan.php';
require_once 'Mamalia.php';
require_once 'Burung.php';

// Contoh penggunaan
$hewan1 = new Mamalia("Singa", "Panthera leo", 5, 4);
echo $hewan1->getInfoMamalia() . "\n";

$hewan2 = new Burung("Elang", "Aquila chrysaetos", 3, 180);
echo $hewan2->getInfoBurung() . "\n";
?>
