<?php

class Overloading {

    public function deskripsi(){
        return "Ini Adalah aritmatika";
    }
    
    public function __call($name, $arguments)
    {
        if ($name == 'tambah'){
            if(count($arguments)== 2){
                if (is_int($arguments[0]) && is_int($arguments[1])) {
                return "Penjumlahan int: " . ($arguments[0] + $arguments[1]) . "\n";
                } elseif (is_float($arguments[0]) && is_float($arguments[1])) {
                    return "Penjumlahan double: " . ($arguments[0] + $arguments[1]) . "\n";
                    } elseif (is_int($arguments[0]) && is_float($arguments[1])) {
                        return "Penjumlahan int & double: " . ($arguments[0] + $arguments[1]) . "\n";
                        }elseif (is_float($arguments[0]) && is_int($arguments[1])) {
                            return "Penjumlahan double & int: " . ($arguments[0] + $arguments[1]) . "\n";
                            } elseif (is_string($arguments[0]) && is_string($arguments[1])) {
                                return "Parameter string: " . ($arguments[0] . " " . $arguments[1]) . "\n";
                                }
            } elseif (count($arguments) == 3) {
                return "Penjumlahan tiga angka: " . ($arguments[0] + $arguments[1] + $arguments[2]) . "\n";
                } elseif (is_int($arguments[0]) && is_int($arguments[1]) && is_int($arguments[2])) {
                        return "Penjumlahan double & int: " . ($arguments[0] + $arguments[1] + $arguments[2]) . "\n";
                        }
            return "Parameter tidak valid \n";
        }
    }
}

$overloading = new Overloading();

echo $overloading->tambah(5,9);
echo $overloading->tambah(1.6,1.3);
echo $overloading->tambah(1.2,9);
echo $overloading->tambah(6,1.3);
echo $overloading->tambah(2,5,8);
echo $overloading->tambah('cika','bali');