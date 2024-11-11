<?php
require_once 'Bentuk.php';
class Lingkaran extends Bentuk
{
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas()
    {
        return 3.14 * $this->jariJari * $this->jariJari;
    }
}