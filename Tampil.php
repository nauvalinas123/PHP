<?php
require_once "SepedaMotor.php";
require_once "Mobil.php";

$mobil = new Mobil("Toyota", 2020, 5);
$sepedaMotor = new SepedaMotor("Yamaha", 2018, "4-tak");

echo $mobil->getInfo() . "\n";
$mobil->ubahTahunProduksi(2021);
echo $sepedaMotor->getInfo() . "\n";
$sepedaMotor->ubahTahunProduksi(2019);



