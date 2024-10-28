<?php
class Hewan {
    public function bersuara () {
        return "Hewan mwngeluarkan suara.<br>";
    }
}

class Anjing extends Hewan {
    public function bersuara () {
        return "Anjing menggonggong.<br>";
    }
}

$hewan = new Hewan ();
echo $hewan->bersuara();

$anjing = new Anjing;
echo $anjing->bersuara();
?>