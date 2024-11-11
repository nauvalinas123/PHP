<?php
require_once 'Bentuk.php';
class Persegi extends Bentuk {
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    public function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}