<?php
class Overloading {

    public function __call($name, $arguments)
    {
        if ($name == 'tambah') {
            if (count($arguments) == 2) {
                if (is_int($arguments[0]) && is_int($arguments[1])) {
                    return "Penjumlahan integer: " . ($arguments[0] + $arguments[1]);
                } elseif (is_float($arguments[0]) && is_float($arguments[1])) {
                    return "Penjumlahan double: " . ($arguments[0] + $arguments[1]);
                }
            }
            return "Parameter tidak valid";
        }
    }
}

$Overloading = new Overloading();

echo $Overloading->tambah(5, 9) . "<br>";
echo $Overloading->tambah(1.6, 1.3) . "<br>";
echo $Overloading->tambah('Cika', 'Bali');
?>
